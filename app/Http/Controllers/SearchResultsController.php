<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Troop;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class SearchResultsController extends Controller
{
    public function __invoke()
    {
        $troopsResults = collect();

        $search = trim(request('query'));
        $category = request('category');
        $troop = request('troop');
        $tags = request('tags');

        $locale = app()->getLocale();

        if ($search) {
            $troopsResults = Troop::query()
                ->whereLike(DB::raw("lower(name->'$.$locale')"), "%".strtolower($search)."%")
                ->get(['featured_image_id', 'name', 'description', 'slug']);
        }


        $postResults = Post::query()
            ->when($search, function (Builder $query, string $search) use ($locale) {
                $query->where(function (Builder $query) use ($locale, $search) {
                    $query->whereLike(DB::raw("lower(title->'$.$locale')"), "%".strtolower($search)."%")
                        ->orWhereLike(DB::raw("lower(body->'$.$locale')"), "%".strtolower($search)."%");
                });
            })
            ->when(($category && $category !== 'all'), function (Builder $query) use($category) {
                $query->whereHas('category', function (Builder $query) use ($category) {
                    $query->where('category_id', $category);
                });
            })
            ->when($tags, function (Builder $query) use($tags) {
                $query->whereHas('tags', function (Builder $query) use ($tags) {
                    $query->whereIn('tags.id', $tags);
                });
            })
            ->when(($troop && $troop !== 'all'), function (Builder $query) use($troop) {
                $query->whereHas('troop', function (Builder $query) use ($troop) {
                    $query->where('troop_id', $troop);
                });
            })
            ->published()
            ->latest('published_at')
            ->get(['id', 'featured_image_id', 'title', 'body', 'slug']);


        $results = $troopsResults->concat($postResults)->simplePaginate();

        return view('search-results', [
            'results' => $results,
            'category' => Category::find($category)?->name,
            'troop' => Troop::find($troop)?->name,
            'tags' => Tag::whereIn('id', $tags ?? [])?->pluck('name')->implode(', '),
            'search'  => $search,
        ]);
    }
}
