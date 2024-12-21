@props(["register" => false])

<x-default.authentication-card>
    @if($register)
        <x-slot name="logo" class="mx-auto text-center">
            <x-custom.logo/>
        </x-slot>
        <x-validation-errors class="mb-4"/>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="hidden" name="redirect_url" value="{{ url()->current() }}">
            <div>
                <x-label for="name" value="{{ __('Name') }}"/>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                         autofocus autocomplete="name"/>
            </div>
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autocomplete="username"/>
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}"/>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                         autocomplete="new-password"/>
            </div>
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                         name="password_confirmation" required autocomplete="new-password"/>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required/>
                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <a @click="showRegisterCard = false; showAuthCard = true"
                   class="cursor-pointer underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Already registered?') }}
                </a>
                <x-custom.button class="ms-4">
                    {{ __('Register') }}
                </x-custom.button>
            </div>
        </form>
    @else
        <x-slot name="logo">
            <x-custom.logo :primary="false"/>
        </x-slot>
        <x-default.validation-errors class="mb-4"/>
        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="hidden" name="redirect_url" value="{{ url()->current() }}">
            <div>
                <x-label for="email" value="{{ __('Email') }}"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus autocomplete="username"/>
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}"/>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                         autocomplete="current-password"/>
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember"/>
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a @click="showReset = true; showAuthCard= false"
                       class="cursor-pointer underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-custom.button class="ms-4">
                    {{ __('Log in') }}
                </x-custom.button>
            </div>
        </form>
    @endif
</x-default.authentication-card>
