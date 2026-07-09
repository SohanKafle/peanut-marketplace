@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-0 border-b-2 border-peanut-200 bg-transparent text-forest text-lg focus:border-terracotta focus:ring-0 focus:outline-none transition-colors duration-300 px-0 py-2 w-full']) }}>
