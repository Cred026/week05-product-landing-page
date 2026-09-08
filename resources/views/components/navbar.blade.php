<header id="navbar" class="border-b border-line bg-paper">
    <div class="bg-ink px-4 py-2 text-center text-xs text-stone-200">
        An independent student concept for Yardstick Coffee. <a href="https://yardstickcoffee.com" class="underline underline-offset-4 hover:text-white">Visit the official store ↗</a>
    </div>
    <div class="page-width flex min-h-24 items-center justify-between gap-6">
        <a href="{{ route('home') }}" aria-label="Yardstick Coffee home" class="flex items-center gap-2.5 text-2xl font-semibold tracking-tight">
            <img src="{{ asset('images/coffee-mark.svg') }}" width="30" height="30" alt="">
            yardstick<span class="text-coffee-orange">.</span>
        </a>
        <nav aria-label="Main navigation" class="hidden items-center gap-6 text-sm lg:flex">
            <a class="nav-link" href="#hero">Home</a>
            <a class="nav-link" href="#features">Features</a>
            <a class="nav-link" href="#pricing">Pricing</a>
            <a class="nav-link" href="#testimonials">Testimonials</a>
            <a class="nav-link" href="#contact">Contact</a>
        </nav>
        <div class="hidden items-center gap-5 lg:flex">
            <a href="https://store.yardstickcoffee.com/account/login" class="nav-link text-sm">Sign In <span class="sr-only">at the official Yardstick store</span></a>
            <x-button href="#pricing">Get Started <x-landing-icon /></x-button>
        </div>
        <details data-mobile-menu class="relative lg:hidden">
            <summary class="cursor-pointer rounded-md border border-line px-4 py-3 text-sm font-medium">Menu</summary>
            <nav aria-label="Mobile navigation" class="absolute top-14 right-0 z-30 grid w-64 gap-1 rounded-md border border-line bg-paper p-3 shadow-sm">
                @foreach (['hero' => 'Home', 'features' => 'Features', 'pricing' => 'Pricing', 'testimonials' => 'Testimonials', 'contact' => 'Contact'] as $id => $label)
                    <a href="#{{ $id }}" class="rounded-sm px-3 py-3 text-sm hover:bg-stone-200">{{ $label }}</a>
                @endforeach
                <a href="https://store.yardstickcoffee.com/account/login" class="px-3 py-3 text-sm">Sign In at Yardstick ↗</a>
                <x-button href="#pricing">Get Started</x-button>
            </nav>
        </details>
    </div>
</header>
