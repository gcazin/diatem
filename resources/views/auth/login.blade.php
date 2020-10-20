<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h1>{{ config('app.name') }}</h1>
        </x-slot>

        <x-jet-validation-errors class="mb-4"></x-jet-validation-errors>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="tt_identifiant" value="{{ __('Adresse e-mail') }}"></x-jet-label>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="tt_identifiant" :value="old('tt_identifiant')" required autofocus></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="tt_motdepasse" value="{{ __('Mot de passe') }}"></x-jet-label>
                <x-jet-input id="tt_motdepasse" class="block mt-1 w-full" type="password" name="tt_motdepasse" required autocomplete="current-password"></x-jet-input>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Pas encore inscrit?') }}
                    </a>

                <x-jet-button class="ml-4">
                    {{ __('Se connecter') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
