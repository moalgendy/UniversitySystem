 <x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" /> --}}
        <div class="limiter">
            <div class="container-login100" style="background-image: url('{{ asset('login_v3/images/bg-01.jpg') }}');">
                <div class="wrap-login100">
        <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
            @csrf

            <center>
                <img style="margin-bottom: 50px;" src="{{ asset('website/logo.png') }}" alt="logo">
            </center>

            {{-- <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div> --}}

            <div class="wrap-input100 validate-input" data-validate = "Enter name">
                <input class="input100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>


            {{-- <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div> --}}

            <div class="wrap-input100 validate-input" data-validate = "Enter email">
                <input class="input100" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Enter phone">
                <input class="input100" type="text" name="phone" :value="old('phone')" required autofocus placeholder="Phone">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Enter address">
                <input class="input100" type="text" name="address" :value="old('address')" required autofocus placeholder="Address">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            {{-- <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div> --}}

            <div class="wrap-input100 validate-input" data-validate = "Enter password">
                <input class="input100" type="password" name="password" :value="old('password')" required autofocus autocomplete="new-password" placeholder="Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            {{-- <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div> --}}

            <div class="wrap-input100 validate-input" data-validate = "Confirm password">
                <input class="input100" type="password" name="password_confirmation" :value="old('confirm password')" required autocomplete="new-password" placeholder="Confirm Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
                {{-- <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button> --}}
            </div>
        </form>
    {{-- </x-jet-authentication-card> --}}
</x-guest-layout>
