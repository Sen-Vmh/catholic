@props([
    'button' => false,
    'text' => "primary",
    'src' => "/images/not_found.png",
    'alt' => "img"
])

<div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20 mx-auto">
    {{-- Image Section --}}
    <div class="w-[90%] sm:w-[450px] mx-auto lg:w-1/2 flex justify-center order-3 lg:order-none">
        <img {{ $attributes->merge(['class' => "w-full max-h-[300px] lg:max-h-[400px] rounded-lg shadow-lg"]) }}
             src="{{ $src }}" alt="{{ $alt }}">
    </div>

    {{-- Text Section --}}
    <div class="w-[90%] sm:w-[450px] mx-auto lg:w-1/2 text-center lg:text-left">
        <h3 class="text-{{$text}} font-bold text-5xl brightness-[80%]">
            {{ $sectionTitle ?? "sectionTitle not implemented" }}
        </h3>
        <p class="text-{{$text}} brightness-[90%] mt-4 md:mt-6 text-xl">
            {{ $sectionText ?? "sectionText not implemented Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet asperiores blanditiis delectus dicta est eveniet facere illum in ipsa libero necessitatibus, nobis non optio perferendis, quis reiciendis tenetur voluptas? Architecto consequatur cupiditate ex, ipsam laborum magni mollitia odio pariatur!" }}
        </p>
        @if($button)
            <div class="mt-6">
                <x-custom.button size="large">
                    {{ $buttonText ?? "buttonText not implemented" }}
                </x-custom.button>
            </div>
        @endif
    </div>
</div>
