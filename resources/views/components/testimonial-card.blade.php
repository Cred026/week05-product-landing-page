@props(['name', 'position', 'review', 'photo'])

<figure {{ $attributes->class('flex h-full flex-col gap-6 rounded-lg border border-line bg-white p-6') }}>
    <span class="text-3xl leading-none text-rust" aria-hidden="true">“</span>
    <blockquote class="flex-1 text-base leading-7">{{ $review }}</blockquote>
    <figcaption class="flex items-center gap-3 border-t border-line pt-5">
        <img src="{{ asset('images/'.$photo) }}" alt="Stock portrait representing {{ $name }}, a fictional customer" width="48" height="48" loading="lazy" class="size-12 rounded-full object-cover">
        <div><p class="text-sm font-semibold">{{ $name }}</p><p class="text-xs text-stone-600">{{ $position }} · Sample persona</p></div>
    </figcaption>
</figure>
