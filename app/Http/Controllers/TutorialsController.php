<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function index()
    {
        $tutorials = Tutorial::query()->paginate();
        return view('tutorials/index')->with('tutorials', $tutorials);
    }
}
