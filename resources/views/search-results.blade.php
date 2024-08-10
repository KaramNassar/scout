@extends('layouts.app')

@php
    $q = '';
        if (request('query')){
            $q = '<span class="text-main-light dark:text-main-dark">' . request('query') . '</span>';
        }
@endphp

@section('header')
    <x-category-page-header :title="__('Search Results For ') . ' ' . $q"></x-category-page-header>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <ul class="grid gap-y-10 gap-x-6 mb-16">
                @forelse($results as $result)
                    <li class="flex flex-col justify-center">
                        <a href="{{ route($result instanceof App\Models\Troop ? 'troops.show' :'posts.show', $result->slug) }}">
                            <div
                                class="relative flex flex-col md:flex-row gap-4 space-y-3 md:space-y-0 rounded-xl shadow-md p-3 mx-auto border border-white dark:border-gray-800 dark:bg-gray-700 hover:shadow-lg dark:hover:shadow-gray-700">
                                <div class="">
                                    <x-image :model="$result" class="rounded-xl h-44 min-w-44"/>
                                </div>
                                <div class="">
                                    <h3 class="font-black text-gray-800 dark:text-gray-200 mb-2">
                                        {{ $result instanceof App\Models\Troop ?  $result->name : $result->title }}
                                    </h3>
                                    <p class="text-gray-500 text-sm line-clamp-3 dark:text-gray-400">
                                        {{ $result instanceof App\Models\Troop ?  strip_tags($result->description) : strip_tags($result->body) }}
                                    </p>
                                    <x-read-more-link class="mx-auto"/>
                                </div>
                            </div>

                        </a>
                    </li>
                @empty
                    <h3 class="text-center text-gray-500 dark:text-gray-400 text-4xl">{{ __('Sorry, No Search Results Found') }}</h3>
                @endforelse
            </ul>
            {{ $results->withQueryString()->links() }}
        </div>
        <x-sidebar/>
    </div>
@endsection
