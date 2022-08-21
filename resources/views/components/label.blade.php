@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-blue1-500']) }}>
    {{ $value ?? $slot }}
</label>
