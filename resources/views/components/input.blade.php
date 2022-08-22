@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md border-blue1-300 focus:border-blue1-300 focus:ring-blue1-300' ]) !!}>
