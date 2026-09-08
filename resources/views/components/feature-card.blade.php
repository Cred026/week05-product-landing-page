@props(['icon', 'title', 'description'])

<article {{ $attributes->class('flex flex-col gap-3 border-t border-line pt-6') }}>
    <x-landing-icon :name="$icon" class="mb-2 size-6 text-rust" />
    <h3 class="text-lg font-semibold tracking-tight">{{ $title }}</h3>
    <p class="max-w-sm text-sm leading-7 text-stone-600">{{ $description }}</p>
</article>
