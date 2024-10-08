<?php

use App\Helpers\SeoSiteMap;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchResultsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TroopController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix'     => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', HomeController::class)->name('home');

    Route::view('/contact', 'contact')->name('contact');

    Route::get('/troops', [TroopController::class, 'index'])->name('troops.index');
    Route::get('/troops/{troop:slug}', [TroopController::class, 'show'])->name('troops.show');

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

    Route::get('/pages/{page:slug}', [PageController::class, 'show'])->name('pages.show');

    Route::get('/tags/{tag:slug}', TagController::class)->name('tags.show');
    Route::get('/categories/{postCategory:slug}', CategoryController::class)->name('categories.show');

    Route::get('/search-results', SearchResultsController::class)->name('search-results');

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/sitemap', function () {
        $sitemap = (new SeoSiteMap())->attachCustom('/', Carbon::now()->format('Y-m-d H:i:s'));

        return response($sitemap->toXml(), 200, [
            'Content-Type' => 'application/xml',
        ]);
    });
});
