<x-guest-layout>
    <x-card-reset-pass>
        <h1 class="text-blue-title1 font-extrabold text-3xl mb-7 mt-0" > Informe sua nova senha</h1>
        <div class="mb-4 text-sm text-blue-desc text-lg">
            {{ __('Por favor, preencha os campos abaixo com a nova senha.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex flex-col items-center justify-center mt-8">
                <x-buttonLogin type="submit" class="bg-primary w-full ml-0" >
                    {{ __('Confirmar') }}
                </x-buttonLogin>
                <a class="underline font-bold text-blue-label mt-3 cursor-pointer" >
                    Voltar
                </a>
            </div>
        </form>
    </x-card-reset-pass>
</x-guest-layout>
