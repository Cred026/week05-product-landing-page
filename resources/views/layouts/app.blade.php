@isset($slot)
    <x-layouts::app.sidebar :title="$title ?? null">
        <flux:main>
            {{ $slot }}
        </flux:main>
    </x-layouts::app.sidebar>
@else
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Discover Yardstick Coffee subscriptions, compare monthly coffee plans, and find your next everyday brew. An independent ITST 302 student concept.">
            <meta name="theme-color" content="#faf8f5">
            <title>@yield('title', 'Yardstick Coffee — Good coffee. On repeat.')</title>
            <link rel="icon" href="{{ asset('images/coffee-mark.svg') }}" type="image/svg+xml">
            @fonts
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        <body class="landing bg-paper font-sans text-ink antialiased">
            <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:rounded-md focus:bg-ink focus:p-4 focus:text-white">Skip to content</a>
            <x-navbar />
            <main id="main-content">
                @yield('content')
            </main>
            <x-footer />
        </body>
    </html>
@endisset
