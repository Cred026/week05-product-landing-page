@props(['name' => 'arrow'])

<svg {{ $attributes->class('size-5 shrink-0') }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('coffee')
            <path d="M4 8h13v7a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8Zm13 1h2a3 3 0 0 1 0 6h-2M7 2v3m4-3v3m4-3v3" />
            @break
        @case('truck')
            <path d="M3 5h11v12H3V5Zm11 5h4l3 4v3h-7" /><circle cx="7" cy="18" r="2" /><circle cx="17" cy="18" r="2" />
            @break
        @case('refresh')
            <path d="M20 7v5h-5M4 17v-5h5M5 8a8 8 0 0 1 13-3l2 3M4 16l2 3a8 8 0 0 0 13-3" />
            @break
        @case('gift')
            <path d="M3 8h18v4H3V8Zm2 4v9h14v-9M12 8v13" /><path d="M12 8H8a3 3 0 1 1 3-3l1 3Zm0 0h4a3 3 0 1 0-3-3l-1 3Z" />
            @break
        @case('people')
            <circle cx="9" cy="7" r="3" /><path d="M3 21v-3a6 6 0 0 1 12 0v3m1-17a3 3 0 0 1 0 6m2 4a5 5 0 0 1 3 4v3" />
            @break
        @case('beans')
            <ellipse cx="12" cy="12" rx="7" ry="10" transform="rotate(35 12 12)" /><path d="M16 4c-7 4-1 12-8 16" />
            @break
        @case('check')
            <path d="m5 12 4 4L19 6" />
            @break
        @case('instagram')
            <rect x="3" y="3" width="18" height="18" rx="5" /><circle cx="12" cy="12" r="4" /><path d="M17.5 6.5h.01" />
            @break
        @case('facebook')
            <path d="M14 21v-9h3l1-4h-4V6c0-1 1-2 2-2h2V1h-3c-4 0-5 2-5 5v2H7v4h3v9" />
            @break
        @case('mail')
            <rect x="3" y="5" width="18" height="14" rx="2" /><path d="m3 6 9 7 9-7" />
            @break
        @default
            <path d="M4 12h16m-6-6 6 6-6 6" />
    @endswitch
</svg>
