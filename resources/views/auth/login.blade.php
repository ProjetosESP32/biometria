<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo class="w-60 h-20 fill-current text-gray-500" />
        </x-slot>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <fieldset>
                <x-label for="email" :value="'Nome'" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </fieldset>

            <fieldset class="mt-4">
                <x-label for="password" :value="'Senha'" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </fieldset>

            <label for="remember_me" class="inline-flex items-center mt-4">
                <x-input id="remember_me" type="checkbox" class="rounded" name="remember" />
                <span class="ml-2 font-bold text-sm text-blue-label">Lembrar-me</span>
            </label>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm font-extrabold text-blue-dark hover:text-gray-900" href="{{ route('password.request') }}">
                        Esqueci minha senha
                    </a>
                @endif

                <x-button type="submit" class="ml-3">
                    Fazer login
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>