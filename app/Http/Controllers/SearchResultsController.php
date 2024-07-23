<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class SearchResultsController extends Controller
{
    public function __invoke()
    {
        $results = Admin::search(request('query'))->options([
            'query_by' => 'firstname'
        ])->get();
        return view('search-results', [
            'results' => $results,
        ]);
    }
}
