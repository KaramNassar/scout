<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class CategoryController extends Controller
{
	public function __invoke(Category $postCategory)
	{
        $posts = $postCategory->posts->simplePaginate(6);

        $pageTitle = $postCategory->name;

        seo()
            ->title(__('Syrian Syrian Scout') . ': ' . $pageTitle, '')
            ->description(__('Syrian Syrian Scout') . ': ' . $pageTitle, '')
            ->images(
                asset('storage/' . GeneralSetting::first()->hero_image)
            );

        return view('posts.index', [
            'posts' => $posts,
            'pageTitle' => $pageTitle,
        ]);
	}
}
