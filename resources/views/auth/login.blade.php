<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- Logo personalizado --}}
            <img src="{{ asset('images/logo.png') }}" alt="Logo Nexus" class="w-20 h-20">
        </x-slot>

        <!-- Mensaje de estado -->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulario de login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Correo electrónico')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Contraseña -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Recordarme -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <!-- Botones y enlaces -->
            <div class="flex items-center justify-between mt-4">
                {{-- Enlace a registro --}}
                @if (Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('¿No tienes cuenta? Regístrate') }}
                    </a>
                @endif

                {{-- Enlace a recuperación de contraseña --}}
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                {{-- Botón de login --}}
                <x-primary-button class="ml-4">
                    {{ __('Iniciar sesión') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
