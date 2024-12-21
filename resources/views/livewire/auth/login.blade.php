<div>
    @if($show)

        <x-default.authentication-card>
            <x-slot name="logo">
                <x-custom.logo :primary="false"/>
            </x-slot>

            <x-default.validation-errors class="mb-4"/>

            @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
            @endsession

            <form wire:submit.prevent="login">
                <div>
                    <x-label for="email" value="{{ __('Email') }}"/>
                    <x-input
                        id="email"
                        class="block mt-1 w-full"
                        type="email"
                        wire:model="email"
                        required
                        autofocus
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
                        autocomplete="current-password"
                    />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox
                            id="remember_me"
                            wire:model="remember"
                        />
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a
                            @click="showReset = true; showLogin = false"
                            class="cursor-pointer underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-custom.button
                        class="ms-4"
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-50 cursor-wait"
                    >
                        <span wire:loading.remove>{{ __('Log in') }}</span>
                        <span wire:loading>{{ __('Logging in...') }}</span>
                    </x-custom.button>
                </div>
            </form>
        </x-default.authentication-card>
        
    @endif
</div>
