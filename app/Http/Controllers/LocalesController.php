<?php

namespace App\Http\Controllers;


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
