<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        return view('auth/signin');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required','exists:users,username'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }


        return back()->with('error', 'The provided credentials do not match our records.');
    }
    public function register(Request $request)
    {
        return view('auth/signup');
    }
}
