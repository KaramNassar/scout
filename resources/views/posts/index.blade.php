@extends('layouts.app')

@section('header')
    <x-page-header :title="$pageTitle"/>
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
