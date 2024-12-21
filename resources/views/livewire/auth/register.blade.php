<div>
    @if($show)
        <x-default.authentication-card>
            <x-slot name="logo">
                <x-custom.logo :primary="false"/>
            </x-slot>

            <x-default.validation-errors class="mb-4"/>

            <form wire:submit="register">
                <div>
                    <x-label for="name" value="{{ __('Name') }}"/>
                    <x-input
                        id="name"
                        class="block mt-1 w-full"
                        type="text"
                        wire:model="name"
                        required
                        autofocus
                        autocomplete="name"
                    />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}"/>
                    <x-input
                        id="email"
                        class="block mt-1 w-full"
                        type="email"
                        wire:model="email"
                        required
                        autocomplete="username"
                    />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}"/>
                    <x-input
                        id="password"
                        class="block mt-1 w-full"
                        type="password"
                        wire:model="password"
                        required
                        autocomplete="new-password"
                    />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                    <x-input
                        id="password_confirmation"
                        class="block mt-1 w-full"
                        type="password"
                        wire:model="password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a
                        wire:click="$dispatch('show-login')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer"
                    >
                        {{ __('Already registered?') }}
                    </a>

                    <x-custom.button class="ms-4">
                        {{ __('Register') }}
                    </x-custom.button>
                </div>
            </form>
        </x-default.authentication-card>
    @endif
</div>
