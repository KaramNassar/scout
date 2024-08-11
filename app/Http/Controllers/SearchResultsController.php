<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Troop;
use Illuminate\Support\Facades\DB;

class SearchResultsController extends Controller
{
    public function __invoke()
    {
//        $troopsResults = Troop::search(request('query'))->get();
//        $postResults = Post::search(request('query'))->where('status', 'published')->get();

        $results = collect();

        $search = trim(request('query'));
        if ($search) {
            $locale = app()->getLocale();

            $troopsResults = Troop::query()
                ->whereLike(DB::raw("lower(name->'$.$locale')"), "%".strtolower($search)."%")
                ->get(['featured_image_id', 'name', 'description', 'slug']);


            $postResults = Post::query()
                ->where(function ($query) use ($locale, $search) {
                    $query->whereLike(DB::raw("lower(title->'$.$locale')"), "%".strtolower($search)."%")
                        ->orWhereLike(DB::raw("lower(body->'$.$locale')"), "%".strtolower($search)."%");
                })
                ->where('status', 'published')
                ->get(['featured_image_id', 'title', 'body', 'slug']);

            $results = $troopsResults->concat($postResults)->simplePaginate();
        }


        return view('search-results', [
            'results' => $results,
            'search' => $search,
        ]);
    }
}
