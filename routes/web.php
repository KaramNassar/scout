<?php

use App\Http\Controllers\LocalesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchResultsController;
use App\Http\Controllers\TroopController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home', [
    'featuredPosts' => Post::featuredPosts(),
    'newsPosts'     => Post::newsPosts(),
    'activityPosts'     => Post::activityPosts(),
])->name('home');

Route::view('/about-the-scout', 'about')->name('about');
Route::view('/history-of-the-scout', 'history')->name('history-of-the-scout');
Route::view('/contact', 'contact')->name('contact');

Route::get('/troops', [TroopController::class, 'index'])->name('troops.index');
Route::get('/troops/{troop:slug}', [TroopController::class, 'show'])->name('troops.show');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/tags/{tag:slug}', [PostController::class, 'index'])->name('tags.show');

Route::get('/search-results', SearchResultsController::class)->name('search-results');

Route::get('/locale/{locale}', LocalesController::class)->name('locale.switch');
