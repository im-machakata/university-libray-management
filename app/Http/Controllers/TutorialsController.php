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
    public function read(string $slug, Request $request)
    {
        $tutorial = Tutorial::query()->whereSlug($slug)->firstOrFail();
        return view('tutorials/read')->with('tutorial', $tutorial);
    }
    public function create()
    {
        return view('tutorials/create');
    }
    public function store(Request $request)
    {
        $tutorialDetails = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'slug'=> ['required','min:3','max:255','unique:tutorials'],
            'content' => ['required','min:10','max:10000'],
        ]);
        $tutorial = Tutorial::query()->create($tutorialDetails);
        return redirect()->route('tutorials.read', ['slug' => $tutorial->slug]);
    }
}
