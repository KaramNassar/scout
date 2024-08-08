@extends('layouts.app')

@section('hero')
    <x-hero/>
@endsection

@section('content')

    <x-stat-bar/>

    <x-content-showcase :heading="__('Featured Stories')">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-md:max-w-md mx-auto">

            @foreach($featuredPosts as $featuredPost)
                <x-card.featured :post="$featuredPost"/>
            @endforeach

        </div>
    </x-content-showcase>

    <x-content-showcase :heading="__('Latest News')">
        <x-swiper>

            @foreach($newsPosts as $newsPost)
                <x-card.latest-news :post="$newsPost"/>
            @endforeach

        </x-swiper>

        <div class="flex justify-center">
            <x-round-button :link="route('posts.index')">
                {{ __('Explore All News') }}
            </x-round-button>
        </div>
    </x-content-showcase>

    <x-content-showcase :heading="__('Activities')">
        <div class="w-full h-full">
            <div class="max-w-6xl mx-auto">
                <ul class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5">

                    @foreach($activityPosts as $activityPost)
                        <li>
                            <x-card.activity :post="$activityPost"/>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </x-content-showcase>

    <x-content-showcase :heading="__('Where We Work')">
        <livewire:map/>
    </x-content-showcase>

@endsection

