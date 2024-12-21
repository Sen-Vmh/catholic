@props([
    'styling' => 'primary',
    'size' => 'medium',   // default size is 'medium'
    'outline' => false    // default style is filled (not outlined)
])

@php
    $baseStyle = 'px-4 py-2 rounded-md font-bold focus:outline-none disabled:opacity-25 transition-all duration-150 ease-in-out';

    // Type Styles
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

    $styleClass = $outline ? ($outlineStyles[$styling] ?? $outlineStyles['primary'])
                          : ($filledStyles[$styling] ?? $filledStyles['primary']);

    // Size Styles
    $sizeOptions = [
        'small' => 'px-3 py-1 text-xs',
        'medium' => 'px-4 py-2 text-sm',
        'large' => 'px-6 py-3 text-base',
    ];

    $sizeClass = $sizeOptions[$size] ?? $sizeOptions['medium'];
@endphp

<button {{ $attributes->merge(['class' => "$baseStyle $styleClass $sizeClass", 'type']) }}>
    {{ $slot }}
</button>
