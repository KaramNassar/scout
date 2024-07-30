<?php

use App\Http\Controllers\LocalesController;
use App\Http\Controllers\SearchResultsController;
use App\Http\Controllers\TroopController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/about-the-scout', 'about')->name('about');
Route::view('/history-of-the-scout', 'history')->name('history-of-the-scout');
Route::view('/contact', 'contact')->name('contact');

Route::get('/troops', [TroopController::class, 'index'])->name('troops.index');
Route::get('/troops/{troop:slug}', [TroopController::class, 'show'])->name('troops.show');

Route::view('/all-news', 'all-news')->name('all-news');
Route::view('/news/article', 'article')->name('article');

Route::get('/search-results', SearchResultsController::class)->name('search-results');

Route::get('/locale/{locale}', LocalesController::class)->name('locale.switch');
