<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $posts = $tag->posts->simplePaginate(6);

        $pageTitle = $tag->name;

        \seo()
            ->title(__('Syrian Syriac Scout') . ': ' . $pageTitle, '')
            ->description(__('Syrian Syriac Scout') . ': ' . $pageTitle, '')
            ->images(
                asset('storage/' . GeneralSetting::first()->hero_image)
            );

        return view('posts.index', [
            'posts' => $posts,
            'pageTitle' => $pageTitle,
        ]);
    }
}
