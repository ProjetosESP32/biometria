<x-guest-layout>
    <x-card-reset-pass>
        <h1 class="text-blue-title1 font-extrabold text-3xl mb-7 mt-0"> Esqueceu Sua Senha?</h1>
        <div class="mb-4 text-blue-desc text-lg">
            Por favor, insira o endereço de e-mail associado à sua conta e nós lhe enviaremos um link para redefinir sua senha.
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <fieldset>
                <x-label for="email" :value="'Email'" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </fieldset>

            <div class="flex flex-col items-center justify-center mt-8">
                <x-button type="submit" class="bg-primary w-full ml-0">
                    Enviar
                </x-button>
                <a href="/login" class="underline font-bold text-blue-label mt-3 cursor-pointer">
                    Voltar
                </a>
            </div>
        </form>
    </x-card-reset-pass>
</x-guest-layout>