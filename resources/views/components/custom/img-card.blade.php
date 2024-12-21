@props([
    'type' => 'primary',     // default value is 'primary'
    'size' => 'medium',      // default value is 'medium'
    'outline' => false,       // default value is false for filled style
    'src' => null
])

@php
    $baseStyle = 'p-1 rounded-md font-bold text-md focus:outline-none disabled:opacity-25 transition-all duration-150 ease-in-out';

    $filledStyles = [
        'primary' => 'border-2 border-[#15616D] bg-[#15616D] text-[#FFECD1]
                      hover:bg-[#124e58] hover:border-[#124e58]
                      active:bg-[#124e58] active:border-[#124e58]
                      focus:bg-[#124e58] focus:border-[#124e58] focus:ring-2 focus:ring-[#15616D]/50',

        'dark-primary' => 'border-2 border-[#0f4e59] bg-[#0f4e59] text-[#FFECD1]
                          hover:bg-[#0d3e48] hover:border-[#0d3e48]
                          active:bg-[#0d3e48] active:border-[#0d3e48]
                          focus:bg-[#0d3e48] focus:border-[#0d3e48] focus:ring-2 focus:ring-[#0f4e59]/50',

        'secondary' => 'border-2 border-[#FFECD1] bg-[#FFECD1] text-[#15616D]
                       hover:bg-[#FFE0B5] hover:border-[#FFE0B5]
                       active:bg-[#FFE0B5] active:border-[#FFE0B5]
                       focus:bg-[#FFE0B5] focus:border-[#FFE0B5] focus:ring-2 focus:ring-[#FFECD1]/50',

        'accent' => 'border-2 border-[#B2AFC3] bg-[#B2AFC3] text-[#15616D]
                    hover:bg-[#A09CB0] hover:border-[#A09CB0]
                    active:bg-[#A09CB0] active:border-[#A09CB0]
                    focus:bg-[#A09CB0] focus:border-[#A09CB0] focus:ring-2 focus:ring-[#B2AFC3]/50',

        'danger' => 'border-2 border-[#D55D5B] bg-[#D55D5B] text-[#FFECD1]
                    hover:bg-[#c34a48] hover:border-[#c34a48]
                    active:bg-[#c34a48] active:border-[#c34a48]
                    focus:bg-[#c34a48] focus:border-[#c34a48] focus:ring-2 focus:ring-[#D55D5B]/50'
    ];

    $outlineStyles = [
        'primary' => 'border-2 border-[#15616D] text-[#15616D] bg-transparent
                      hover:bg-[#15616D] hover:text-[#FFECD1]
                      active:bg-[#15616D] active:text-[#FFECD1]
                      focus:bg-[#15616D] focus:text-[#FFECD1] focus:ring-2 focus:ring-[#15616D]/50',

        'dark-primary' => 'border-2 border-[#0f4e59] text-[#0f4e59] bg-transparent
                          hover:bg-[#0f4e59] hover:text-[#FFECD1]
                          active:bg-[#0f4e59] active:text-[#FFECD1]
                          focus:bg-[#0f4e59] focus:text-[#FFECD1] focus:ring-2 focus:ring-[#0f4e59]/50',

        'secondary' => 'border-2 border-[#FFECD1] text-[#FFECD1] bg-transparent
                       hover:bg-[#FFECD1] hover:text-[#15616D]
                       active:bg-[#FFECD1] active:text-[#15616D]
                       focus:bg-[#FFECD1] focus:text-[#15616D] focus:ring-2 focus:ring-[#FFECD1]/50',

        'accent' => 'border-2 border-[#B2AFC3] text-[#B2AFC3] bg-transparent
                    hover:bg-[#B2AFC3] hover:text-[#15616D]
                    active:bg-[#B2AFC3] active:text-[#15616D]
                    focus:bg-[#B2AFC3] focus:text-[#15616D] focus:ring-2 focus:ring-[#B2AFC3]/50',

        'danger' => 'border-2 border-[#D55D5B] text-[#D55D5B] bg-transparent
                    hover:bg-[#D55D5B] hover:text-[#FFECD1]
                    active:bg-[#D55D5B] active:text-[#FFECD1]
                    focus:bg-[#D55D5B] focus:text-[#FFECD1] focus:ring-2 focus:ring-[#D55D5B]/50'
    ];

    $typeClass = $baseStyle . ' ' . ($outline ? $outlineStyles[$type] : $filledStyles[$type]);
@endphp

<div {{ $attributes->merge(['class' => "$typeClass relative group"]) }}>
    @if($src)
        <img class="rounded object-cover w-full h-full group-hover:brightness-75 transition-all duration-300"
             src="{{ $src }}" alt="">
    @endif
    <h3 class="font-extrabold tracking-wide capitalize text-center text-3xl absolute inset-0 flex justify-center items-center">
        {{ $cardTitle ?? "cardTitle not implemented" }}
    </h3>
</div>




