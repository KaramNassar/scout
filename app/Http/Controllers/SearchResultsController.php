<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Troop;

class SearchResultsController extends Controller
{
    public function __invoke()
    {
        $results = collect();
        $troopsResults = Troop::search(request('query'))->get();
        $postResults = Post::search(request('query'))->where('status', 'published')->get();


        $results = $troopsResults->merge($postResults)->simplePaginate();

        return view('search-results', [
            'results' => $results,
        ]);
    }
}
