@extends('layouts.app')

@php
    $search = $search ? (__('Search Results For') . ': <span class="text-main-light dark:text-main-dark">' . $search . '</span><br>') : '';
    $category = $category ? (__('Category') . ': <span class="text-main-light dark:text-main-dark">' . $category . '</span><br>') : '';
    $troop = $troop ? (__('Troop') . ': <span class="text-main-light dark:text-main-dark">' . $troop . '</span><br>') : '';
    $tags = $tags ? (__('Tags') . ': <span class="text-main-light dark:text-main-dark">' . $tags . '</span>') : '';
    $title = $search . $category . $troop . $tags;

    $title = $title ?: __('All News');

    $page = new \App\Models\Page();
    $page->title = strip_tags($title);
    $page->content =  strip_tags($title);
@endphp

@section('seo')
    <x-seo :page="$page"/>
@endsection

@section('header')
    <x-page-header :title="$title" class="{{ $title !== __('All News') ? 'text-start' : '' }}"/>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            @if($troop)
                <div class="flex flex-wrap gap-1 mb-10">
                @foreach(App\Models\Category::whereNot('id', request('category'))->take(3)->get() as $category)
                    <a href="{{ route('search-results') . '?troop=' . request('troop') . '&category=' . $category->id }}">
                        <x-tag-span class="text-lg py-2 px-4">
                            {{ $category->name }}
                        </x-tag-span>
                    </a>
                @endforeach
                </div>
            @endif
            <ul class="grid gap-y-10 gap-x-6 mb-16">
                @forelse($results as $result)
                    <li class="flex flex-col justify-center">
                        <div
                            class="relative flex flex-col w-80 md:w-full h-[420px] md:h-auto md:flex-row gap-4 space-y-3 md:space-y-0 rounded-xl shadow-md p-3 mx-auto border border-white dark:border-gray-800 dark:bg-gray-700 hover:shadow-lg dark:hover:shadow-gray-700">
                            <div class="">
                                <a href="{{ route($result instanceof App\Models\Troop ? 'troops.show' :'posts.show', $result->slug) }}">
                                    <x-image :model="$result" class="rounded-xl h-44 md:min-w-44 md:w-44"/>
                                </a>

                            </div>
                            <div>

                                @if($result instanceof App\Models\Post)
                                    <div class="flex flex-wrap mb-2 gap-1">
                                        @foreach($result->tags as $tag)
                                            <a href="{{ route('tags.show', $tag->slug) }}">
                                                <x-tag-span>
                                                    {{ $tag->name }}
                                                </x-tag-span>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                                <a href="{{ route($result instanceof App\Models\Troop ? 'troops.show' :'posts.show', $result->slug) }}">

                                    <h3 class="font-black text-gray-800 dark:text-gray-200 mb-2">
                                        {{ $result instanceof App\Models\Troop ?  $result->name : $result->title }}
                                    </h3>
                                </a>

                                <p class="text-gray-500 text-sm line-clamp-3 dark:text-gray-400">
                                    {{ $result instanceof App\Models\Troop ?  strip_tags($result->description) : strip_tags($result->body) }}
                                </p>

                                <a href="{{ route($result instanceof App\Models\Troop ? 'troops.show' :'posts.show', $result->slug) }}">
                                    <x-read-more-link class="inset-x-auto"/>
                                </a>
                            </div>
                        </div>

                    </li>
                @empty
                    <h3 class="text-center text-gray-500 dark:text-gray-400 text-4xl">{{ __('Sorry, No Search Results Found') }}</h3>
                @endforelse
            </ul>
            {{ $results->isNotEmpty() ? $results->withQueryString()->links() : '' }}
        </div>
        <x-sidebar/>
    </div>
@endsection
