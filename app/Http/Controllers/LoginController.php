<?php

namespace App\Http\Controllers; // Dit vertelt Laravel waar dit bestand hoort

use Illuminate\Http\Request;    // Nodig voor de $request variabele
use Illuminate\Support\Facades\Auth; // Nodig om te kunnen inloggen

class LoginController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('bezoekers');
        }

        else {
            return back()->withErrors(['email' => 'De gegevens kloppen niet.']);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}