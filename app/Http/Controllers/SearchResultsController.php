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
        $locale = app()->getLocale();

        $troopsResults = Troop::query()
            ->whereLike(DB::raw("lower(name->'$.$locale')"), "%".strtolower(trim(request('query')))."%")
            ->get(['featured_image_id', 'name', 'description', 'slug']);


        $postResults = Post::query()
            ->where(function ($query) use ($locale) {
                $query->whereLike(DB::raw("lower(title->'$.$locale')"), "%".strtolower(trim(request('query')))."%")
                    ->orWhereLike(DB::raw("lower(body->'$.$locale')"), "%".strtolower(trim(request('query')))."%");
            })
            ->where('status', 'published')
            ->get(['featured_image_id', 'title', 'body', 'slug']);


        $results = $troopsResults->merge($postResults)->simplePaginate();

        return view('search-results', [
            'results' => $results,
        ]);
    }
}
