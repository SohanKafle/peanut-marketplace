@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-3 text-sm font-bold text-white bg-peanut dark:bg-peanut rounded-xl shadow-sm transition' // Active: Solid Peanut Brown
            : 'block px-4 py-3 text-sm font-semibold text-peanut dark:text-peanut hover:bg-cream-dark dark:hover:bg-cream-dark rounded-xl transition'; // Inactive: Peanut text, Cream-dark hover
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>