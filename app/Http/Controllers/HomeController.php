<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'featuredPosts' => Post::featuredPosts(),
            'newsPosts'     => Post::newsPosts(),
            'activityPosts' => Post::activityPosts()
        ]);
    }

}
