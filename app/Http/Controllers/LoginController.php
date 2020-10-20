<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function validateLogin(Request $request)
    {
        $request->validate([
            'tt_identifiant' => 'required|email',
            'tt_motdepasse' => 'required|string',
        ]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('tt_identifiant', 'password');

        $credentials['password'] = $request->tt_motdepasse;

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
    }
}
