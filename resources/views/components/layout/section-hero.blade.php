@props(['heroBg' => ''])

@php
    $style = $heroBg
        ? "background-image: url('{$heroBg}');
           background-size: cover;
           background-position: center;"
        : '';

    $filter = "<div class='absolute inset-0 bg-[#0d3e48]/40 mix-blend-multiply'></div>
    <div class='absolute inset-0 bg-gradient-to-t from-[#0d3e48]/40 to-transparent'></div>"

@endphp

<div style="{{ $style }}"
     class="relative h-[350px] overflow-hidden bg-gradient-to-br from-primary via-primary/90 to-accent/30">

    @if ($heroBg)
        <div class="absolute inset-0 bg-[#0d3e48]/40 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#0d3e48]/40 to-transparent"></div>
    @endif

    <div class="absolute inset-0">
        <div
            class="absolute top-10 -right-20 w-80 h-80 bg-accent/10 backdrop-blur-lg rounded-3xl transform rotate-12"></div>
        <div
            class="absolute -bottom-20 -left-10 w-80 h-80 bg-secondary/10 backdrop-blur-lg rounded-3xl transform -rotate-12"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 h-full flex flex-col items-center justify-center sm:px-4">
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 max-w-3xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-clash-display font-bold text-secondary leading-tight mb-6">
                {{ $heroTitle }}
            </h1>
            <p class="text-xl md:text-2xl text-secondary/90 font-light mb-8 max-w-2xl mx-auto">
                {{ $heroDescription }}
            </p>
            <x-custom.button size="large" styling="accent">
                {{ $buttonText }}
            </x-custom.button>
        </div>
    </div>
</div>
