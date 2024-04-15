<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        return view('auth/signin');
    }
    public function register(Request $request)
    {
        return view('auth/signup');
    }
}
