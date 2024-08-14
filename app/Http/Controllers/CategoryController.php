<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
	public function __invoke(Category $postCategory)
	{
        $posts = $postCategory->posts->simplePaginate(6);

        $pageTitle = $postCategory->name;

        return view('posts.index', [
            'posts' => $posts,
            'pageTitle' => $pageTitle,
        ]);
	}
}
