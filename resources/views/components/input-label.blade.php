@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-forest-700 uppercase tracking-wide']) }}>
    {{ $value ?? $slot }}
</label>
