<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Troop;

class PostController extends Controller
{
	public function index()
	{
        $posts = Post::published()->simplePaginate(6);

        $pageTitle = "All News";

        return view('posts.index', [
            'posts' => $posts,
            'pageTitle' => $pageTitle
        ]);
	}

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
