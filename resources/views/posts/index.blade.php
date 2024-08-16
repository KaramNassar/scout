@extends('layouts.app')

@php
    $page = new \App\Models\Page();
    $page->title = __($pageTitle);
    $page->content =  __('Syrian Syriac Scout') . ' ' . __($pageTitle);
@endphp
@section('seo')
    <x-seo :page="$page"/>
@endsection

@section('header')
    <x-page-header :title="__($pageTitle)"/>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto max-w-xs sm:px-6 md:max-w-3xl md:px-8 lg:max-w-none lg:px-0">
                <div class="grid gap-6 md:grid-cols-2 mb-16">
                    @forelse($posts as $post)
                        <x-card.latest-news :post="$post"/>
                    @empty
                        {{ __('Sorry, no posts Found') }}
                    @endforelse

                </div>
                {{ $posts->links() }}
            </div>
        </div>
        <x-sidebar/>
    </div>

@endsection
