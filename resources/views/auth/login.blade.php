{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<x-guest-layout>
    <!-- Login -->
    <div class="login-page d-flex align-items-center vh-100">
        <div class="overlay"></div>
        <div class="login-form">
            <!-- Container -->
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-social-icon">
                        <h2>Signup</h2>
                        <!-- <ul class="social-buttons">
                            <li class="social-buttons-hover">
                                <a href="http://google.com/">
                                    <i class="ri-google-fill"></i>
                                </a>
                            </li>
                            <li class="social-buttons-hover">
                                <a href="https://twitter.com/">
                                    <i class="uil uil-twitter"></i>
                                </a>
                            </li>
                            <li class="social-buttons-hover">
                                <a href="https://www.facebook.com/">
                                    <i class="uil uil-facebook-f"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-envelope"></i></span>
                        {{-- <input type="email" class="form-control" id="inputEmail" tabindex="2" placeholder="Email" required> --}}

                        <x-input class="form-control" id="inputEmail" tabindex="2" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="input-group">
                        <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                        {{-- <input type="password" class="form-control" id="inputPassword" tabindex="3" placeholder="Password" required> --}}

                        <x-input class="form-control" id="inputPassword" tabindex="3" placeholder="Password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    </div>

                    <div class="input-group">
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="rememberMe">
                            <label class="form-check-label form-check-box" for="rememberMe">Remember Me</label>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-md-3">
                        <div class="col-sm-6 mb-md-3 mb-sm-0">
                            <x-button class="btn theme-btn-1">
                                {{ __('Login') }}
                            </x-button>
                        </div>
                    </div>

                    <div class="login-footer">Create a new account <a href="/register">Sign Up</a></div>
                </form>
            </div>
            <!-- /Container -->
        </div>
    </div>
    <!-- /Login -->
    </x-guest-layout>
