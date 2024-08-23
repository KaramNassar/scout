<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Str;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class PageController extends Controller
{
    public function show(Page $page)
    {

        $image = isset($page->featuredImage) ? asset('storage/'.$page->featuredImage->url) : asset(
            'storage/'.GeneralSetting::first()->hero_image
        );
        \seo()
            ->title(__('Syrian Syrian Scout').': '.$page->title, '')
            ->description(Str::of($page->content)->substr(0, 155)->stripTags() . '...', '')
            ->images($image);

        return view('pages.show', ['page' => $page]);
    }
}
