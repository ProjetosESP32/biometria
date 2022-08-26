<x-guest-layout>
    <x-card-reset-pass>
        <h1 class="text-blue-title1 font-extrabold text-3xl mb-7 mt-0"> Informe sua nova senha</h1>
        <div class="mb-4 text-blue-desc text-lg">
            Por favor, preencha os campos abaixo com a nova senha.
        </div>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <fieldset>
                <x-label for="email" :value="Email" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </fieldset>

            <fieldset class="mt-4">
                <x-label for="password" :value="Password" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </fieldset>

            <fieldset class="mt-4">
                <x-label for="password_confirmation" :value="Confirm Password" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </fieldset>

            <div class="flex flex-col items-center justify-center mt-8">
                <x-button type="submit" class="bg-primary w-full ml-0">
                    Confirmar
                </x-button>
                <a class="underline font-bold text-blue-label mt-3 cursor-pointer">
                    Voltar
                </a>
            </div>
        </form>
    </x-card-reset-pass>
</x-guest-layout>