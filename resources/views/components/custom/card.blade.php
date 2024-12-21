@props([
    'type' => 'primary',     // default type is 'primary'
    'size' => 'medium',      // not used here but prepared for future size adjustments
    'outline' => false,      // default is filled
    'src' => null,            // optional image source
    'text' => "primary"
])

@php
    // Base styling for the card
    $baseStyle = 'p-6 rounded-lg shadow-md focus:outline-none disabled:opacity-50 transition-all duration-150 ease-in-out';

    // Filled card styles
    $filledStyles = [
        'primary' => 'border-2 border-primary bg-primary text-secondary
                      hover:bg-darkPrimary hover:border-darkPrimary
                      focus:ring-2 focus:ring-primary/50',
        'dark-primary' => 'border-2 border-darkPrimary bg-darkPrimary text-secondary
                          hover:bg-primary hover:border-primary
                          focus:ring-2 focus:ring-darkPrimary/50',
        'secondary' => 'border-2 border-secondary bg-secondary text-primary
                       hover:bg-accent hover:border-accent
                       focus:ring-2 focus:ring-secondary/50',
        'accent' => 'border-2 border-accent bg-accent text-secondary
                    hover:bg-accent/80 hover:border-accent/80
                    focus:ring-2 focus:ring-accent/50',
        'danger' => 'border-2 border-danger bg-danger text-secondary
                    hover:bg-danger/80 hover:border-danger/80
                    focus:ring-2 focus:ring-danger/50',
    ];

    // Outlined card styles
    $outlineStyles = [
        'primary' => 'border-2 border-primary text-primary bg-transparent
                      hover:bg-primary hover:text-secondary
                      focus:ring-2 focus:ring-primary/50',
        'dark-primary' => 'border-2 border-darkPrimary text-darkPrimary bg-transparent
                          hover:bg-darkPrimary hover:text-secondary
                          focus:ring-2 focus:ring-darkPrimary/50',
        'secondary' => 'border-2 border-secondary text-secondary bg-transparent
                       hover:bg-secondary hover:text-primary
                       focus:ring-2 focus:ring-secondary/50',
        'accent' => 'border-2 border-accent text-accent bg-transparent
                    hover:bg-accent hover:text-secondary
                    focus:ring-2 focus:ring-accent/50',
        'danger' => 'border-2 border-danger text-danger bg-transparent
                    hover:bg-danger hover:text-secondary
                    focus:ring-2 focus:ring-danger/50',
    ];

    // Final type class depending on the `outline` prop
    $typeClass = $outline ? ($outlineStyles[$type] ?? $outlineStyles['primary'])
                          : ($filledStyles[$type] ?? $filledStyles['primary']);
@endphp

<div {{ $attributes->merge(['class' => "$baseStyle $typeClass"]) }}>
    {{-- Optional Image --}}
    @if($src)
        <img class="w-full h-auto rounded-t-lg mb-4" src="{{ $src }}" alt="">
    @endif

    {{-- Card Content --}}
    <h3 class="font-garamond text-lg font-bold mb-2">{{ $cardTitle ?? 'Card Title Not Implemented' }}</h3>
    <hr class="border-accent/20 my-2">
    <p class="text-sm text-accent">{{ $cardDescription ?? 'Card Description Not Implemented' }}</p>
</div>
