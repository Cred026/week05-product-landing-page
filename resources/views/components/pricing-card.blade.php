@props(['name', 'price', 'quantity', 'description', 'features', 'href', 'highlight' => false])

<article {{ $attributes->class(['flex flex-col gap-6 rounded-lg border p-6 sm:p-8', 'border-ink bg-ink text-white' => $highlight, 'border-line bg-white' => ! $highlight]) }}>
    <div class="flex items-center justify-between gap-2">
        <h3 class="text-2xl font-semibold tracking-tight">{{ $name }}</h3>
        @if ($highlight)<x-landing-icon name="coffee" class="text-orange-300" />@endif
    </div>
    <p @class(['min-h-12 text-sm leading-6', 'text-stone-300' => $highlight, 'text-stone-600' => ! $highlight])>{{ $description }}</p>
    <div>
        <p><span class="text-4xl font-semibold tracking-tight">₱{{ number_format($price) }}</span><span @class(['text-sm', 'text-stone-300' => $highlight, 'text-stone-600' => ! $highlight])> / month</span></p>
        <p @class(['mt-2 text-sm', 'text-stone-300' => $highlight, 'text-stone-600' => ! $highlight])>{{ $quantity }}</p>
    </div>
    <ul @class(['grid flex-1 content-start gap-4 border-t pt-6 text-sm', 'border-stone-600' => $highlight, 'border-line' => ! $highlight])>
        @foreach ($features as $feature)
            <li class="flex items-start gap-3"><x-landing-icon name="check" class="size-4" /><span>{{ $feature }}</span></li>
        @endforeach
    </ul>
    <x-button :href="$href" :variant="$highlight ? 'accent' : 'secondary'" :aria-label="'Subscribe to '.$name.' at the official Yardstick store'">Subscribe <x-landing-icon /></x-button>
</article>
