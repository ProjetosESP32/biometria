@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md border-blue-label focus:border-blue-label focus:ring-blue-label' ]) !!}>
