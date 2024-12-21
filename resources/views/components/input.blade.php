@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-accent/20 focus:border-secondary focus:ring-2 focus:ring-primary rounded-md shadow-sm']) !!}>
