<nav x-data="{ open: false }" class="shadow-xl bg-primary lg:px-28 md:px-16 px-8 sticky top-0 z-40">
    <div class="text-xl font-bold flex justify-between items-center">
        <!-- Logo and Links -->
        <div class="text-secondary flex items-center gap-12 z-40">
            <div class="w-[280px]">
                <x-custom.logo>

                </x-custom.logo>
            </div>
            <a class="hidden lg:block navlink" href="{{ route("home") }}">Home</a>
            <a class="hidden lg:block navlink" href="{{ route("learn.index") }}">Learn</a>
            <a class="hidden lg:block navlink" href="{{ route("quiz.index") }}">Quizzes</a>
        </div>
        <!-- Menu Toggle and Overlay -->
        <div class="md:hidden">
            <!-- Toggle Button -->
            <button
                @click="open = !open"
                class="z-50 relative w-10 h-10 flex items-center justify-center"
            >
                <div class="w-6 relative">
                    <div
                        class="w-full h-0.5 bg-secondary absolute transition-transform duration-300"
                        :class="{ 'rotate-45 translate-y-2 !bg-[#15616D]': open }"
                    ></div>
                    <div
                        :class="{ 'opacity-0': open }"
                        class="w-full h-0.5 bg-secondary absolute top-2 transition-opacity duration-300"
                    ></div>
                    <div
                        :class="{ '-rotate-45 -translate-y-2 !bg-[#15616D]': open }"
                        class="w-full h-0.5 bg-secondary absolute top-4 transition-transform duration-300"
                    ></div>
                </div>
            </button>

            <!-- Menu Overlay -->
            <div
                x-show="open"
                @click.away="open = false"
                class="fixed inset-0 z-40 bg-[#FFECD1]"
                x-transition
            >
                <!-- Growing Circle Background -->
                <div
                    :class="{ 'active': open }"
                    class="menu-background"
                ></div>

                <!-- Menu Content -->
                <div
                    :class="{ 'active': open }"
                    class="menu-content fixed inset-0 z-40 flex items-center justify-center"
                >
                    <div class="flex flex-col items-center space-y-8">
                        <a href="#"
                           class="text-4xl font-bold text-[#15616D] navlink after:h-5">Home</a>
                        <a href="#"
                           class="text-4xl font-bold text-[#15616D] navlink after:h-5">Learn</a>
                        <a href="#"
                           class="text-4xl font-bold text-[#15616D] navlink after:h-5">Quizzes</a>
                    </div>
                </div>
            </div>
        </div>
        @auth
            <div class="ms-3 relative">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="border-accent rounded-full p-1 flex text-sm font-bold border-4 border-transparent focus:outline-none focus:border-accent transition">
                                <img class="h-8 w-8 rounded-full object-cover"
                                     src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                            </button>
                        @else
                            <span class="border-accent border-4 p-1 inline-flex rounded-md">
                                <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}
                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <div class="bg-secondary">
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>
        @endauth

        @guest
            <ul class="hidden md:flex items-center ms-auto font-bold gap-8 relative">
                <li>
                    <x-custom.button
                        type="secondary"
                        :outline="true"
                        size="large"
                        wire:click="coco"
                    >
                        Log In
                    </x-custom.button>
                </li>
                <li>
                    <x-custom.button
                        type="secondary"
                        size="large"
                        wire:click="$dispatch('show-register')"
                    >
                        Sign Up
                    </x-custom.button>
                </li>
            </ul>
        @endguest
    </div>
</nav>

