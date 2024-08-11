<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $posts = $tag->posts->simplePaginate(6);

        $pageTitle = $tag->name;

        return view('posts.index', [
            'posts' => $posts,
            'pageTitle' => $pageTitle,
        ]);
    }
}
