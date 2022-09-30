{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
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
            <form method="POST" action="{{ route('register') }}">
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
                    <span class="login-form-icon"><i class="uil uil-user"></i></span>
                    {{-- <input type="text" class="form-control" id="inputUsername" tabindex="1" placeholder="Username" required>


                    <x-label for="name" :value="__('Name')" /> --}}

                    <x-input class="form-control" id="inputUsername" tabindex="1" placeholder="Username" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <div class="input-group">
                    <span class="login-form-icon"><i class="uil uil-envelope"></i></span>
                    {{-- <input type="email" class="form-control" id="inputEmail" tabindex="2" placeholder="Email" required> --}}

                    <x-input class="form-control" id="inputEmail" tabindex="2" placeholder="Email" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="input-group">
                    <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                    {{-- <input type="password" class="form-control" id="inputPassword" tabindex="3" placeholder="Password" required> --}}

                    <x-input class="form-control" id="inputPassword" tabindex="3" placeholder="Password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                </div>

                <div class="input-group">
                    <span class="login-form-icon"><i class="uil uil-lock"></i></span>
                    {{-- <input type="password" class="form-control" id="inputPassword" tabindex="3" placeholder="Password" required> --}}

                    <x-input id="password_confirmation" class="form-control" tabindex="4" placeholder="Confirm Password"
                                type="password"
                                name="password_confirmation" required />
                </div>






                <div class="input-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label form-check-box" for="rememberMe">I agree to the <a class="" href="#">Terms & Conditions</a></label>
                    </div>
                </div>

                <div class="row justify-content-center mb-md-3">
                    <div class="col-sm-6 mb-md-3 mb-sm-0">
                        <x-button class="btn theme-btn-1">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </div>

                <div class="login-footer">Already have an account? <a href="/login">Login</a></div>
            </form>
        </div>
        <!-- /Container -->
    </div>
</div>
<!-- /Login -->
</x-guest-layout>
