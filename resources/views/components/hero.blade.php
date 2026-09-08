<section id="hero" aria-labelledby="hero-title" class="page-width grid items-center gap-10 py-10 md:grid-cols-2 md:gap-12 md:py-16">
    <div class="flex flex-col items-start gap-7">
        <p class="flex items-center gap-2 text-sm text-stone-600"><x-landing-icon name="coffee" /> Specialty coffee, roasted in the Philippines.</p>
        <h1 id="hero-title" class="text-6xl leading-[1.03] font-semibold tracking-[-0.055em] sm:text-7xl xl:text-[88px]">Good coffee.<br>On <span class="text-rust">repeat.</span></h1>
        <p class="max-w-md text-lg leading-relaxed text-stone-600">Make a little room for a better morning. Your favorite Yardstick coffees, delivered every month. You bring the mug.</p>
        <div class="flex flex-wrap gap-3">
            <x-button href="#pricing">Find your coffee <x-landing-icon /></x-button>
            <x-button href="#showcase" variant="secondary">See how it works</x-button>
        </div>
        <div class="flex flex-wrap gap-x-6 gap-y-3 border-t border-line pt-6 text-xs text-stone-600">
            <span class="flex items-center gap-2"><x-landing-icon name="check" class="size-4" /> Monthly delivery</span>
            <span class="flex items-center gap-2"><x-landing-icon name="check" class="size-4" /> Skip or cancel</span>
            <span class="flex items-center gap-2"><x-landing-icon name="check" class="size-4" /> Coffee Club perks</span>
        </div>
    </div>
    <figure class="overflow-hidden rounded-lg bg-stone-200">
        <img src="{{ asset('images/golden-ticket.png') }}" alt="Yardstick Golden Ticket coffee bags, with a 250 gram bag held beside the larger bag" width="900" height="900" fetchpriority="high" class="aspect-square w-full object-cover">
        <figcaption class="flex items-center justify-between gap-4 bg-ink px-5 py-4 text-sm text-white">
            <span>Meet your daily brew. <span class="text-stone-300">Golden Ticket</span></span>
            <a href="#pricing" aria-label="Explore Golden Ticket pricing" class="rounded-sm p-1 hover:text-orange-300"><x-landing-icon /></a>
        </figcaption>
    </figure>
</section>
