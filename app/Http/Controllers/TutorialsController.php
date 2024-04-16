<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function index()
    {
        return view('tutorials/index');
    }
}
