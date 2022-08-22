@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-blue-label']) }}>
    {{ $value ?? $slot }}
</label>
