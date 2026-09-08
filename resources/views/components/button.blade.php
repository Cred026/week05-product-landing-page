@props(['href', 'variant' => 'primary'])

<a href="{{ $href }}" {{ $attributes->class([
    'inline-flex min-h-12 items-center justify-center gap-3 rounded-md border px-5 py-3 text-sm font-semibold transition-colors',
    'border-ink bg-ink text-white hover:border-stone-700 hover:bg-stone-700' => $variant === 'primary',
    'border-stone-400 bg-transparent text-ink hover:bg-stone-200/60' => $variant === 'secondary',
    'border-coffee-orange bg-coffee-orange text-ink hover:bg-orange-300' => $variant === 'accent',
]) }}>
    {{ $slot }}
</a>
