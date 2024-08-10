@extends('layouts.app')

@section('header')
    <x-category-page-header :title="__('All News')"/>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto max-w-xs sm:px-6 md:max-w-3xl md:px-8 lg:max-w-none lg:px-0">
                <div class="grid gap-6 md:grid-cols-2 mb-16">
                    @forelse($posts as $post)
                        <article
                            class="relative overflow-hidden pb-0 md:pb-10 rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                            <a href="{{ route('posts.show', $post->slug) }}">
                                <x-image :model="$post"
                                         class="h-56 transition duration-300 ease-in-out hover:scale-105"/>
                            </a>

                            <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                                <time datetime="2022-10-10"
                                      class="block text-xs text-gray-500">{{ $post->published_at }}</time>
                                <div class="mt-4 flex flex-wrap gap-1">
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('tags.show', $tag->slug) }}">
                                            <span
                                                class="whitespace-nowrap rounded-full border border-gray-300 text-xs px-2.5 py-0.5 hover:text-main-light dark:border-gray-600 dark:text-gray-100 dark:hover:text-main-dark">
                                                {{ $tag->name }}
                                            </span>
                                        </a>

                                    @endforeach
                                </div>
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">{{ $post->title }}</h3>
                                </a>

                                <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                    {!! $post->body !!}
                                </p>

                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <x-read-more-link/>
                                </a>

                            </div>
                        </article>
                    @empty
                        No posts
                    @endforelse

                </div>
                    {{ $posts->links() }}
            </div>
        </div>
        <x-sidebar/>
    </div>

@endsection
