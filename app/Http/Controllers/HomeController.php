<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class HomeController extends Controller
{
    public function __invoke()
    {
        \seo()
            ->title(__('Syrian Syriac Scout'), '')
            ->description(__('hero-description'))
            ->images(
                asset('storage/' . GeneralSetting::first()?->hero_image)
            );

        return view('home', [
            'featuredPosts' => Post::featuredPosts(),
            'newsPosts'     => Post::newsPosts(),
            'activityPosts' => Post::activityPosts()
        ]);
    }

}
