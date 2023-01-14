<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'E-posta adresi sistemde bulunamadı.',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function reset_password()
    {
        return view('auth.reset_password');
    }
}
