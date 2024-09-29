<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest('published_at')->simplePaginate(6);

        $pageTitle = "All News";

        \seo()
            ->title(__('Syrian Syriac Scout') . ': ' . $pageTitle, '')
            ->description(__('Syrian Syriac Scout') . ': ' . $pageTitle, '')
            ->images(
                asset('storage/' . GeneralSetting::first()?->hero_image)
            );

        return view('posts.index', [
            'posts'     => $posts,
            'pageTitle' => $pageTitle
        ]);
    }

    public function show(Post $post)
    {
        $relatedPosts = $post->relatedPosts();

        $image = isset($post->featuredImage) ? asset('storage/'.$post->featuredImage->url) : asset(
            'storage/'.GeneralSetting::first()?->hero_image
        );
        \seo()
            ->title($post->title, '')
            ->description(Str::of($post->body)->substr(0, 155)->stripTags() . '...', '')
            ->images($image);

        return view('posts.show', [
            'post' => $post,
            'relatedPosts' => $relatedPosts
        ]);
    }
}
