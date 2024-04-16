<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        return view('auth/signin');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'exists:users,username'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->with('error', 'The provided credentials do not match our records.')->withInput();
    }
    public function register(Request $request)
    {
        return view('auth/signup');
    }
    public function createUserAccount(Request $request)
    {
        $userAccountDetails = $request->validate([
            'username' => ['required', 'unique:users,username', 'min:5', 'max:100'],
            'password' => ['required', 'min:6', 'max:255'],
            'name' => ['required', 'min:3', 'max:80'],
            'surname' => ['required', 'min:3', 'max:80'],
            'school_id' => ['required', 'min:5', 'max:8', 'unique:users,school_id'],
            'phone' => ['required', 'min:9', 'max:15'],
        ]);

        if (User::query()->create($userAccountDetails)) {
            $request->session()->regenerate();

            return redirect()->intended('/login');
        }


        return back()->with('error', 'The provided credentials do not match our records.')->withInput();
    }
}
