<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalesController extends Controller
{
    public function __invoke(string $locale)
    {
        if (array_key_exists($locale, config('locales'))) {
            session(['locale' => $locale]);
        }

        return redirect()->back();
    }
}
