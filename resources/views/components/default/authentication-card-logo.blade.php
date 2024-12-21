@props(["reverse" => false])

@php(
    $color = ($reverse ? '#15616D' : '#FFECD1')
)
@if($reverse)
@endif

<a {{ $attributes->merge() }} href="{{ route('home') }}">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 120">
        <!-- Flipped C in accent color -->
        <path d="M85 35 A25 25 0 0 0 85 85"
              fill="none"
              stroke="#ff5c39"
              stroke-width="20"
              stroke-linecap="round"/>

        <!-- atho text -->
        <text x="100" y="75" font-family="Arial Black, sans-serif" font-size="40" fill="{{ $color }}">atho</text>

        <!-- Q with diagonal tail -->
        <path d="M227 35 A25 25 0 1 1 227 85 M242 75 L257 90"
              fill="none"
              stroke="#ff5c39"
              stroke-width="20"
              stroke-linecap="round"/>

        <!-- uiz text -->
        <text x="277" y="75" font-family="Arial Black, sans-serif" font-size="40" fill="{{ $color }}">uiz</text>
    </svg>
</a>
