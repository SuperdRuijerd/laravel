<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) 
        {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::check()) 
        {
            return redirect()->route('dashboard');
        }
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
    }

    public function register()
    {
        if (Auth::check()) 
        {
            return redirect()->route('dashboard');
        }
        return view('auth.register');
    }

    public function register_post(Request $request)
    {
        if (Auth::check()) 
        {
            return redirect()->route('dashboard');
        }
        if($request->post())
        {
            $user = new user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('login');
        }
    }

    public function reset_password()
    {
        if (Auth::check()) 
        {
            return redirect()->route('dashboard');
        }
        return view('auth.reset_password');
    }
}
