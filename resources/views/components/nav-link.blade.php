@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-3 rounded-none bg-peanut text-forest-900 font-medium tracking-wide transition-colors duration-200'
            : 'block px-4 py-3 rounded-none text-peanut-200 hover:bg-forest/50 hover:text-cream font-light tracking-wide transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
