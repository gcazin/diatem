<div class="py-6 px-8 bg-white border-b border-gray-200">
    <div class="text-2xl">
        <h1>Bienvenue sur {{ config('app.name') }}</h1>

        <hr class="my-5">

        <div class="flex mb-3">
            <div class="flex-auto"><h1>Liste des utilisateurs</h1></div>
            <div class="flex-auto text-right">
                <x-jet-secondary-button :href="route('api.users')">Accès au listing sous format JSON</x-jet-secondary-button>
            </div>
        </div>
        <table class="table-auto w-full">
            <thead>
            <tr>
                <th class="px-4 py-2">Identifiant</th>
                <th class="px-4 py-2">Nom</th>
                <th class="px-4 py-2">Prénom</th>
                <th class="px-4 py-2">Ville</th>
                <th class="px-4 py-2">Pays</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="{{ $loop->odd ?: 'bg-gray-100' }}">
                    <td class="border px-4 py-2">{{ $user->tt_identifiant }}</td>
                    <td class="border px-4 py-2">{{ $user->tt_nom }}</td>
                    <td class="border px-4 py-2">{{ $user->tt_prenom }}</td>
                    <td class="border px-4 py-2">{{ $user->tt_ville }}</td>
                    <td class="border px-4 py-2">{{ $user->tt_pays }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
    <div class="mt-3">
    </div>
</div>
