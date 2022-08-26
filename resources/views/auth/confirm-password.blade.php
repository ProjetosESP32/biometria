<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Essa é uma parte protegida da aplicação. Para continuar, digite sua senha.
        </div>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <fieldset>
                <x-label for="password" :value="Password" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </fieldset>

            <div class="flex justify-end mt-4">
                <x-button>
                    Confirmar
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>