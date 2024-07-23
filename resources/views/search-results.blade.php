@extends('layouts.app')

@php
    $q = '';
        if (request('query')){
            $q = '<span class="text-main-light dark:text-main-dark">' . request('query') . '</span>';
        }
@endphp

@section('header')
    <x-category-page-header :title="__('Search Results For ') . $q"></x-category-page-header>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <ul class="grid gap-y-10 gap-x-6">
                @forelse($results as $result)
                    <li class="flex flex-col justify-center">
                        <a href="">
                            <div
                                class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rtl:space-x-reverse rounded-xl shadow-md p-3 max-w-xs md:max-w-3xl mx-auto border border-white dark:border-gray-800 dark:bg-gray-700 hover:shadow-lg dark:hover:shadow-gray-700">
                                <div class="w-full md:w-1/3 dark:bg-gray-700 grid place-items-center">
                                    <x-img :src="asset('storage/images/1.jpg')" alt="hello" class="rounded-xl"/>
                                </div>
                                <div class="relative w-full md:w-2/3 dark:bg-gray-700 flex flex-col space-y-2 p-3">
                                    <h3 class="font-black text-gray-800 dark:text-gray-200 md:text-xl text-xl">
                                        {{ $result->firstname }}
                                    </h3>
                                    <p class="text-gray-500 dark:text-gray-400">The best kept secret of The Bahamas is
                                        the
                                        country’s sheer
                                        size and diversity. With 16 major islands, The Bahamas is an unmatched
                                        destination</p>
                                    <x-read-more/>
                                </div>
                            </div>

                        </a>
                    </li>
                @empty
                    <h3 class="text-center text-gray-500 dark:text-gray-400 text-4xl">{{ __('Sorry, No Search Results Found') }}</h3>
                @endforelse
            </ul>
        </div>
        <x-sidebar/>
    </div>
@endsection
