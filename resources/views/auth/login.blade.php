<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> 

        <x-jet-validation-errors class="mb-4" /> --}}

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="limiter">
            <div class="container-login100" style="background-image: url('{{ asset('login_v3/images/bg-01.jpg') }}');">
                <div class="wrap-login100">
                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
                        {{-- <span class="login100-form-logo"> --}}
                            {{-- <i class="zmdi zmdi-landscape"></i> --}}
                        {{-- </span> --}}
                        <center>
                            <img style="margin-bottom: 50px;" src="{{ asset('website/logo.png') }}" alt="logo">
                        </center>

            {{-- <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> --}}

            <div class="wrap-input100 validate-input" data-validate = "Enter email">
                <input class="input100" type="email" name="email" :value="old('email')" required placeholder="{{ __('website.email') }}">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            {{-- <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div> --}}

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100" type="password" name="password" required autocomplete="current-password" placeholder="{{ __('website.password') }}">
                <span class="focus-input100" data-placeholder="&#xf191;"for="password" value="{{ __('Password') }}"></span>
            </div>

            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                <label class="label-checkbox100" for="ckb1">
                    {{ __('website.remember') }}
                </label>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    {{ __('website.login') }}
                </button>
            </div>

            {{-- <div class="text-center p-t-90">
                @if (Route::has('password.request'))
                <a class="txt1" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div> --}}

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                
            </div> --}}
            {{-- <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button> --}}
        </form>
    </div>
</div>
</div>


        <div id="dropDownSelect1"></div>
    {{-- </x-jet-authentication-card> --}}
</x-guest-layout>

