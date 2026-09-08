@extends('layouts.app')

@section('content')
    <x-hero />

    <div class="border-y border-line bg-[#f0ece6]">
        <div class="page-width grid grid-cols-2 gap-5 py-6 text-center text-sm font-medium md:grid-cols-4">
            <span>Roasted in the Philippines</span><span>Delivered to your doorstep</span><span>Made for your daily ritual</span><span>A community in every cup</span>
        </div>
    </div>

    <section id="features" aria-labelledby="features-title" class="page-width py-16 md:py-20">
        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
            <h2 id="features-title" class="max-w-lg text-4xl leading-tight font-semibold tracking-tight md:text-5xl">Your morning ritual.<br>A little more considered.</h2>
            <p class="max-w-sm text-base leading-7 text-stone-600">Great beans are just the beginning. Here’s what makes a subscription fit into everyday life.</p>
        </div>
        <div class="mt-12 grid gap-x-10 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (config('landing.features') as $feature)
                <x-feature-card :icon="$feature['icon']" :title="$feature['title']" :description="$feature['description']" />
            @endforeach
        </div>
    </section>

    <section id="showcase" aria-labelledby="showcase-title" class="border-y border-line bg-[#f0ece6] py-16 md:py-20">
        <div class="page-width">
            <div class="grid items-center gap-10 md:grid-cols-2 md:gap-16">
                <figure>
                    <img src="{{ asset('images/coffee-ritual.jpg') }}" alt="Hot water being poured into a filter brewer for a fresh cup of coffee" width="1400" height="933" loading="lazy" class="aspect-[4/3] w-full rounded-lg object-cover">
                    <figcaption class="mt-3 text-xs text-stone-600">A little time for the brew. Lifestyle photograph, not a Yardstick location.</figcaption>
                </figure>
                <div>
                    <h2 id="showcase-title" class="text-4xl leading-tight font-semibold tracking-tight md:text-5xl">Less reordering.<br>More enjoying.</h2>
                    <ol class="mt-8 grid gap-6">
                        @foreach (['Find your flavor' => 'Choose a familiar favorite or make room for something new.', 'Make it your own' => 'Review the bag size and grind options in the official store.', 'Put the kettle on' => 'Your monthly delivery brings the coffee. The ritual is yours.'] as $step => $description)
                            <li class="flex gap-4"><span class="pt-1 text-sm text-rust">0{{ $loop->iteration }}</span><div><h3 class="text-lg font-semibold">{{ $step }}</h3><p class="mt-1 text-sm leading-6 text-stone-600">{{ $description }}</p></div></li>
                        @endforeach
                    </ol>
                    <a href="#pricing" class="mt-7 inline-flex items-center gap-3 border-b border-ink pb-1 text-sm font-semibold">Explore the subscriptions <x-landing-icon /></a>
                </div>
            </div>

            <div class="mt-16 grid items-center gap-8 border-t border-line pt-12 lg:grid-cols-[1fr_1.5fr]">
                <div><h3 class="text-2xl font-semibold tracking-tight">A peek at the experience.</h3><p class="mt-4 max-w-sm text-sm leading-7 text-stone-600">A desktop and mobile concept for keeping your coffee details close at hand. Actual subscription management happens through Yardstick’s store and emails.</p><p class="mt-4 text-xs font-medium text-rust">Illustrative dashboard preview · No live account data</p></div>
                <div class="grid min-w-0 items-end gap-4 sm:grid-cols-[1fr_150px]">
                    <figure class="min-w-0 overflow-hidden rounded-lg border border-line bg-white shadow-sm">
                        <figcaption class="flex items-center justify-between border-b border-line px-5 py-3 text-xs"><span class="font-semibold">yardstick. / My coffee</span><span class="text-stone-500">Desktop preview</span></figcaption>
                        <div class="p-5"><p class="text-lg font-semibold">Your monthly ritual</p><div class="mt-5 flex items-center gap-4"><img src="{{ asset('images/legazpi.png') }}" alt="Yardstick Legazpi coffee subscription product" width="88" height="88" loading="lazy" class="size-22 rounded-md object-cover"><div><p class="font-semibold">Legazpi</p><p class="mt-1 text-xs text-stone-600">2 × 250g · Whole bean</p><p class="mt-2 text-sm">₱1,350 / month</p></div></div><dl class="mt-5 grid grid-cols-2 gap-4 border-t border-line pt-4 text-xs"><div><dt class="text-stone-500">Frequency</dt><dd class="mt-1 font-medium">Every month</dd></div><div><dt class="text-stone-500">Manage your plan</dt><dd class="mt-1 font-medium">Via subscription email</dd></div></dl></div>
                    </figure>
                    <figure class="hidden overflow-hidden rounded-lg border-4 border-ink bg-white sm:block">
                        <figcaption class="border-b border-line px-3 py-3 text-center text-[10px] font-medium">Mobile preview</figcaption>
                        <div class="p-3"><img src="{{ asset('images/legazpi.png') }}" alt="Legazpi coffee on the mobile concept" width="120" height="120" loading="lazy" class="aspect-square w-full rounded-sm object-cover"><p class="mt-3 text-sm font-semibold">My Legazpi</p><p class="mt-1 text-[10px] text-stone-600">2 × 250g · Monthly</p><p class="mt-3 border-t border-line pt-3 text-xs">A month of good cups.</p></div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" aria-labelledby="pricing-title" class="page-width py-16 md:py-20">
        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end"><h2 id="pricing-title" class="text-4xl font-semibold tracking-tight md:text-5xl">Find your kind of coffee.</h2><p class="max-w-xs text-sm leading-6 text-stone-600">Three ways to make a good morning.<br>Choose the one that feels like you.</p></div>
        <div class="mt-10 grid gap-5 lg:grid-cols-3">
            @foreach (config('landing.plans') as $plan)
                <x-pricing-card :name="$plan['name']" :price="$plan['price']" :quantity="$plan['quantity']" :description="$plan['description']" :features="$plan['features']" :href="$plan['href']" :highlight="$plan['highlight']" />
            @endforeach
        </div>
        <p class="mt-5 text-center text-xs leading-6 text-stone-600">Reference prices checked September 8, 2026. Availability, shipping, and final terms are confirmed at the <a href="https://store.yardstickcoffee.com/collections/subscriptions" class="underline underline-offset-4">official store</a>. This site does not process payments.</p>
    </section>

    <section id="testimonials" aria-labelledby="testimonials-title" class="border-y border-line bg-[#f0ece6] py-16 md:py-20">
        <div class="page-width"><h2 id="testimonials-title" class="text-4xl font-semibold tracking-tight md:text-5xl">A place in your everyday.</h2><p class="mt-4 max-w-2xl text-sm leading-6 text-stone-600">Sample customer stories for this student concept. Names, reviews, and roles are fictional; portraits are stock photography, not verified Yardstick customers.</p>
            <div class="mt-9 grid gap-5 md:grid-cols-3">
                @foreach (config('landing.testimonials') as $testimonial)
                    <x-testimonial-card :name="$testimonial['name']" :position="$testimonial['position']" :review="$testimonial['review']" :photo="$testimonial['photo']" />
                @endforeach
            </div>
        </div>
    </section>

    <section id="questions" aria-labelledby="questions-title" class="page-width grid gap-8 py-16 md:grid-cols-2 md:gap-16 md:py-20">
        <div><h2 id="questions-title" class="text-4xl font-semibold tracking-tight">Before the first cup.</h2><p class="mt-4 text-sm leading-7 text-stone-600">A few things you might be wondering.</p><a href="https://store.yardstickcoffee.com/pages/subscription-faqs" class="mt-4 inline-block text-sm underline underline-offset-4">Read Yardstick’s full subscription FAQs ↗</a></div>
        <div class="border-t border-line">
            @foreach (config('landing.questions') as $question)
                <details class="group border-b border-line py-5"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-medium [&::-webkit-details-marker]:hidden">{{ $question['question'] }}<span class="text-xl group-open:hidden" aria-hidden="true">+</span><span class="hidden text-xl group-open:block" aria-hidden="true">−</span></summary><p class="mt-4 text-sm leading-7 text-stone-600">{{ $question['answer'] }}</p></details>
            @endforeach
        </div>
    </section>

    <section id="contact" aria-labelledby="contact-title" class="bg-ink py-16 text-white md:py-20">
        <div class="page-width grid items-center gap-10 md:grid-cols-2"><div><x-landing-icon name="coffee" class="mb-6 size-8 text-orange-300" /><h2 id="contact-title" class="text-4xl leading-tight font-semibold tracking-tight md:text-5xl">Tomorrow starts<br>with a good cup.</h2><p class="mt-5 max-w-md text-base leading-7 text-stone-300">Find your everyday coffee, or talk to the Yardstick team about coffee for your café or workplace.</p></div><div class="flex flex-col items-start gap-5 md:items-end"><x-button href="#pricing" variant="accent">Find your subscription <x-landing-icon /></x-button><a href="mailto:sales@yardstickcoffee.com" class="inline-flex min-h-11 items-center gap-3 text-sm underline underline-offset-4">Contact Sales <x-landing-icon name="mail" /></a><a href="https://store.yardstickcoffee.com/account/register" class="inline-flex min-h-11 items-center text-sm text-stone-300 underline underline-offset-4">Register at the official store ↗</a></div></div>
    </section>
@endsection
