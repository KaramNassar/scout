<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $posts = $tag->posts->simplePaginate(6);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
