<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <div class="max-w-sm mx-auto px-4 py-8">
            <h1 class="text-3xl text-slate-800 font-bold mb-6">
                Bienvenido a Chance!!
            </h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Ingresar') }}
                    </x-jet-button>
                </div>
                <div class="pt-5 mt-6 border-t border-slate-200">
                    <div class="text-sm">
                        ¿No tienes una cuenta?
                        <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('register') }}">Registrate</a>
                    </div>
                    <div class="flex">
                        <a href="{{ route('auth.facebook') }}"
                            class="mt-1 mr-1 cursor-pointer flex justify-center bg-blue-600 hover:bg-blue-700 rounded-md py-2 px-5 w-full text-gray-100">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="{{ route('auth.google') }}"
                            class="mt-1 cursor-pointer flex justify-center bg-red-600 hover:bg-red-700 rounded-md py-2 px-5 w-full text-gray-100">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
