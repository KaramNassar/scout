<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
	public function __invoke(Category $category)
	{
        $posts = $category->posts->simplePaginate(6);

        return view('posts.index', [
            'posts' => $posts
        ]);
	}
}
