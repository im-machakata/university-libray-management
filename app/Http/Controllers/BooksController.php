<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    private static $likenedQuery = '';

    public function index(Request $request)
    {
        $searchResults = array();
        $query = $request->query('q');
        $type = $request->query('type');
        $page = array(
            'title' => 'Search for books',
            'description' => 'Search and read text books from the comfort of your home with our online library.'
        );

        if ($query) {
            self::$likenedQuery = "%" . $query . "%";
            $page['title'] = 'You searched for ' . $query;
            $page['description'] = 'Showing search results for any books that include the text ' . $query;
            if ($type == 'author') {
                $searchResults = Author::query()
                    ->where('name', 'like', self::$likenedQuery)
                    ->get();
            } else if (!$type || $type == 'book') {
                $searchResults = Book::query()
                    ->where('title', 'like', self::$likenedQuery)
                    ->orWhere('isbn', 'like', self::$likenedQuery)
                    ->get();
            }
        }
        return view('books/search')
            ->with('results', $searchResults)
            ->with('query', $query)
            ->with('type', $type)
            ->with('page', $page);
    }
    public function read(Request $request)
    {
        return view('books/read');
    }
}
