<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query('q');
        $page = array(
            'title' => 'Search for books',
            'description' => 'Search and read text books from the comfort of your home with our online library.'
        );

        if ($query) {
            $page['title'] = 'You searched for ' . $query;
            $page['description'] = 'Showing search results for any books that include the text ' . $query;
        }
        return view('books/search')
            ->with('query', $query)
            ->with('page', $page);
    }
    public function read(Request $request){
        return view('books/read');
    }
}
