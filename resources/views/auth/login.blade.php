<x-guest-layout  >
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-60 h-20 fill-current text-gray-500" />
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
                <x-label for="email" :value="'Nome'" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="'Senha'" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <x-input id="remember_me" type="checkbox" class="rounded" name="remember"/>
                    <span class="ml-2 font-bold text-sm text-blue1-500">Lembrar senha</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm font-extrabold text-blue2 hover:text-gray-900" href="{{ route('password.request') }}">
                    Esqueci minha senha
                </a>
                @endif

                <x-buttonLogin  class="ml-3" >
                   Salvar
                </x-buttonLogin>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>