<?php

use App\Http\Controllers\LocalesController;
use App\Http\Controllers\SearchResultsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/about-the-scout', 'about')->name('about');
Route::view('/history-of-the-scout', 'history')->name('history-of-the-scout');
Route::view('/contact', 'contact')->name('contact');

Route::view('/troops', 'troops.index')->name('troops.index');
Route::view('/troops/{troop:slug}', 'troops.show')->name('troops.show');
Route::view('/all-news', 'all-news')->name('all-news');
Route::view('/news/camp1', 'article')->name('news');

Route::get('/search-results', SearchResultsController::class)->name('search-results');

Route::get('/locale/{locale}', LocalesController::class)->name('locale.switch');
