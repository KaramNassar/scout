<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Troop;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Component;

class SpotlightSearch extends Component
{
//    public $query = '';
//    public $results = [];
//    public $cachedResults = null;
//
//    public function updatedQuery(): void
//    {
//        // Reset if query is empty
//        if (empty($this->query)) {
//            $this->resetSearch();
//            return;
//        }
//
//        // If cached results exist, filter them
//        if ($this->cachedResults !== null) {
//            $this->filterCachedResults();
//        } else {
//            // Perform new search and cache results
//            $this->performSearch();
//        }
//    }
//
//    protected function performSearch(): void
//    {
//        // Perform search and cache results
//        $troopResults = Troop::search($this->query)->take(5)->get();
//        $postResults = Post::search($this->query)
//            ->where('status', 'published')
//            ->take(5)
//            ->get();
//
//        // Merge the results and cache them
//        $this->cachedResults = $troopResults->merge($postResults);
//        $this->results = $this->cachedResults;
//    }
//
//    protected function filterCachedResults(): void
//    {
//        $this->results = $this->cachedResults->filter(function ($result) {
//            return stripos($result->toJson(), $this->query) !== false;
//        });
//    }
//
//    protected function resetSearch(): void
//    {
//        $this->query = '';
//        $this->results = [];
//        $this->cachedResults = null;
//    }
    public $query = '';
    public $results;

    public function updatedQuery(): void
    {
        $this->results = [
            'troops' => collect(),
            'posts' => collect(),
        ];

        $search = trim($this->query);
        if ($search) {
            $locale = app()->getLocale();

            $this->results['troops'] = Troop::query()
                ->whereLike(DB::raw("lower(name->'$.$locale')"), "%".strtolower($search)."%")
                ->take(2)
                ->get(['featured_image_id', 'name', 'description', 'slug']);


            $this->results['posts'] = Post::query()
                ->where(function ($query) use ($locale, $search) {
                    $query->whereLike(DB::raw("lower(title->'$.$locale')"), "%".strtolower($search)."%")
                        ->orWhereLike(DB::raw("lower(body->'$.$locale')"), "%".strtolower($search)."%");
                })
                ->where('status', 'published')
                ->take(3)
                ->get(['featured_image_id', 'title', 'body', 'slug']);
        }
    }

    public function render(): View
    {
        return view('livewire.spotlight-search');
    }
}
