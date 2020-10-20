<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'tt_nom' => ['required', 'string', 'max:255'],
            'tt_prenom' => ['required', 'string', 'max:255'],
            'tt_identifiant' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tt_adresse' => ['required', 'string', 'max:255'],
            'tt_codepostal' => ['required', 'integer'],
            'tt_ville' => ['required', 'string', 'max:255'],
            'tt_pays' => ['required', 'string', 'max:255'],
            'tt_motdepasse' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'tt_nom' => $input['tt_nom'],
            'tt_prenom' => $input['tt_prenom'],
            'tt_identifiant' => $input['tt_identifiant'],
            'tt_adresse' => $input['tt_adresse'],
            'tt_codepostal' => $input['tt_codepostal'],
            'tt_ville' => $input['tt_ville'],
            'tt_pays' => $input['tt_pays'],
            'tt_motdepasse' => Hash::make($input['tt_motdepasse']),
        ]);
    }
}
