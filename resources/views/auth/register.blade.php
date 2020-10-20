<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo></x-jet-authentication-card-logo>
        </x-slot>

        <x-jet-validation-errors class="mb-4"></x-jet-validation-errors>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="tt_nom" value="{{ __('Nom de famille') }}"></x-jet-label>
                <x-jet-input id="tt_nom" class="block mt-1 w-full" type="text" name="tt_nom" :value="old('tt_nom')" required autofocus autocomplete="last_name"></x-jet-input>
            </div>

            <div>
                <x-jet-label for="tt_prenom" value="{{ __('Prénom') }}"></x-jet-label>
                <x-jet-input id="tt_prenom" class="block mt-1 w-full" type="text" name="tt_prenom" :value="old('tt_prenom')" required autofocus autocomplete="first_name"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="tt_identifiant" value="{{ __('Adresse e-mail') }}"></x-jet-label>
                <x-jet-input id="tt_identifiant" class="block mt-1 w-full" type="email" name="tt_identifiant" :value="old('tt_identifiant')" required></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="tt_adresse" value="{{ __('Adresse') }}"></x-jet-label>
                <x-jet-input id="tt_adresse" class="block mt-1 w-full" type="text" name="tt_adresse" required autocomplete="address"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="tt_codepostal" value="{{ __('Code postal') }}"></x-jet-label>
                <x-jet-input id="tt_codepostal" class="block mt-1 w-full" type="text" name="tt_codepostal" required autocomplete="postal_code"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="tt_ville" value="{{ __('Ville') }}"></x-jet-label>
                <x-jet-input id="tt_ville" class="block mt-1 w-full" type="text" name="tt_ville" required autocomplete="city"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="tt_pays" value="{{ __('Pays') }}"></x-jet-label>
                <x-jet-input id="tt_pays" class="block mt-1 w-full" type="text" name="tt_pays" required autocomplete="country"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="tt_motdepasse" value="{{ __('Mot de passe') }}"></x-jet-label>
                <x-jet-input id="tt_motdepasse" class="block mt-1 w-full" type="password" name="tt_motdepasse" required autocomplete="new-password"></x-jet-input>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà inscrit?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
