import { writeFile } from 'node:fs/promises';

// Uses an existing local Chromium instance; no browser package is required.
const tabs = await (await fetch('http://127.0.0.1:9223/json')).json();
const socket = new WebSocket(tabs.find((tab) => tab.type === 'page').webSocketDebuggerUrl);
await new Promise((resolve) => socket.addEventListener('open', resolve, { once: true }));
let sequence = 0;
const pending = new Map();
socket.addEventListener('message', ({ data }) => {
    const message = JSON.parse(data);
    if (pending.has(message.id)) {
        const { resolve, reject } = pending.get(message.id);
        pending.delete(message.id);
        message.error ? reject(new Error(message.error.message)) : resolve(message.result);
    }
});
const call = (method, params = {}) => new Promise((resolve, reject) => {
    const id = ++sequence;
    pending.set(id, { resolve, reject });
    socket.send(JSON.stringify({ id, method, params }));
});
const evaluate = async (expression) => {
    const result = await call('Runtime.evaluate', { expression, returnByValue: true, awaitPromise: true });
    if (result.exceptionDetails) throw new Error(JSON.stringify(result.exceptionDetails));
    return result.result.value;
};
const capture = async (file, clip) => {
    const result = await call('Page.captureScreenshot', { format: 'png', captureBeyondViewport: true, ...(clip ? { clip } : {}) });
    await writeFile(file, Buffer.from(result.data, 'base64'));
};
await call('Page.enable');
await call('Runtime.enable');
const errors = [];
socket.addEventListener('message', ({ data }) => {
    const message = JSON.parse(data);
    if (message.method === 'Runtime.exceptionThrown') errors.push(message.params.exceptionDetails.text);
});
const before = process.argv.includes('--before');
for (const [name, width, height] of before ? [['before-design', 1440, 1000]] : [['desktop', 1440, 1000], ['laptop', 1024, 900], ['tablet', 768, 1024], ['mobile', 390, 844], ['small-mobile', 320, 740]]) {
    await call('Emulation.setDeviceMetricsOverride', { width, height, deviceScaleFactor: 1, mobile: false });
    await call('Page.navigate', { url: 'http://127.0.0.1:8000' });
    await new Promise((resolve) => setTimeout(resolve, 1200));
    await evaluate('document.fonts.ready');
    await evaluate(`Promise.all(Array.from(document.images, image => { image.loading = 'eager'; return image.decode().catch(() => {}); }))`);
    const report = await evaluate(`({width: innerWidth, documentWidth: document.documentElement.scrollWidth, brokenImages: [...document.images].filter(i => !i.naturalWidth).map(i => i.src), title: document.title})`);
    console.log(name, JSON.stringify(report));
    if (report.documentWidth > width || report.brokenImages.length) throw new Error('Layout or image check failed');
    const pageHeight = await evaluate('document.documentElement.scrollHeight');
    await capture(`screenshots/${name}.png`, { x: 0, y: 0, width, height: pageHeight, scale: 1 });
    if (name === 'desktop') {
        await capture('screenshots/after-design.png', { x: 0, y: 0, width, height, scale: 1 });
        for (const id of ['navbar', 'hero', 'features', 'showcase', 'pricing', 'testimonials', 'contact', 'footer']) {
            const rect = await evaluate(`(() => { const r = document.getElementById('${id}').getBoundingClientRect(); return {x:r.x, y:r.y+scrollY, width:r.width, height:r.height, scale:1}; })()`);
            await capture(`screenshots/${id}.png`, rect);
        }
    }
    if (name === 'mobile') {
        const menuWorks = await evaluate(`(() => { const menu = document.querySelector('[data-mobile-menu]'); menu.open = true; const visible = menu.querySelector('nav').getBoundingClientRect().height > 0; menu.querySelector('a').click(); return visible && !menu.open; })()`);
        if (!menuWorks) throw new Error('Mobile navigation failed');
        const faqWorks = await evaluate(`(() => { const faq = document.querySelector('#questions details'); faq.querySelector('summary').click(); return faq.open; })()`);
        if (!faqWorks) throw new Error('FAQ failed');
        const anchorsWork = await evaluate(`Array.from(document.querySelectorAll('a[href^="#"]')).every(a => document.getElementById(a.hash.slice(1)))`);
        if (!anchorsWork) throw new Error('Broken section link');
        console.log('Mobile navigation, FAQ, and section links passed.');
    }
}
if (errors.length) throw new Error(errors.join('\n'));
socket.close();
