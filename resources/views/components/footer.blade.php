<footer id="footer" class="border-t border-line">
    <div class="page-width grid gap-10 py-12 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col gap-4 lg:col-span-2">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-2xl font-semibold tracking-tight"><img src="{{ asset('images/coffee-mark.svg') }}" width="28" height="28" alt="">yardstick.</a>
            <p class="max-w-xs text-sm leading-6 text-stone-600">Specialty coffee from the Philippines.<br>A little everyday ritual, made better.</p>
            <div class="flex gap-2">
                <a href="https://www.instagram.com/yardstickcoffee/" class="rounded-md border border-line p-3 hover:bg-stone-200" aria-label="Yardstick on Instagram"><x-landing-icon name="instagram" /></a>
                <a href="https://www.facebook.com/yardstickcoffee/" class="rounded-md border border-line p-3 hover:bg-stone-200" aria-label="Yardstick on Facebook"><x-landing-icon name="facebook" /></a>
                <a href="mailto:hello@yardstickcoffee.com" class="rounded-md border border-line p-3 hover:bg-stone-200" aria-label="Email Yardstick"><x-landing-icon name="mail" /></a>
            </div>
        </div>
        <div><h2 class="mb-4 text-sm font-semibold">Explore</h2><nav aria-label="Footer navigation" class="grid gap-3 text-sm text-stone-600"><a href="#features" class="nav-link">Why Yardstick</a><a href="#showcase" class="nav-link">How it works</a><a href="#pricing" class="nav-link">Coffee subscriptions</a><a href="#testimonials" class="nav-link">Testimonials</a></nav></div>
        <div><h2 class="mb-4 text-sm font-semibold">Say hello</h2><div class="grid gap-3 text-sm text-stone-600"><a href="mailto:hello@yardstickcoffee.com" class="nav-link break-all">hello@yardstickcoffee.com</a><span>Legazpi Village, Makati<br>Philippines</span><a href="https://yardstickcoffee.com" class="nav-link">Official store ↗</a><a href="#questions" class="nav-link">Common questions</a></div></div>
    </div>
    <div class="page-width flex flex-col justify-between gap-3 border-t border-line py-6 text-xs leading-5 text-stone-600 md:flex-row">
        <p>© {{ date('Y') }} ITST 302 · Week 5 student project.</p>
        <p>Independent educational concept. Yardstick name and product photos belong to their respective owners.</p>
    </div>
</footer>
