@extends('layouts.app')

@section('header')
    <x-page-header :title="$post->title" :date="$post->publishedAt()"></x-page-header>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto px-8 sm:px-6 md:max-w-3xl md:px-8 lg:px-0">
                <article class="dark:bg-gray-800 rounded-md px-0 lg:px-4">
                    @if($post->featuredImage)

                        <div id="singlePhoto" class="mb-10">
                            <a class="item" href="{{  $post->featuredImage->url }}">
                                <x-curator-glider :media="$post->featuredImage"
                                                  class="rounded-xl"
                                                  quality="75"
                                                  format="webp"
                                                  loading="lazy"/>
                            </a>
                        </div>

                    @endif

                    <div class="prose dark:prose-invert max-w-full mb-16">

                        {!! $post->body !!}
                    </div>
                    @if(!$post->gallery->isEmpty()   )

                        <p class="text-center text-sm sm:text-lg mb-4 text-gray-900 dark:text-gray-100">
                            <-- {{ __('Swipe to view more photos') }} --></p>

                        <x-gallery :images="$post->gallery"/>
                    @endif
                    <div class="flex flex-wrap gap-1">
                        @if($post->troop)
                            <a href="{{ route('search-results') . '?troop=' . $post->troop->id }}">
                                <x-tag-span class="text-lg py-2 px-4">
                                    {{ $post->troop->name }}
                                </x-tag-span>
                            </a>
                        @endif
                        @foreach($post->tags as $tag)
                            <a href="{{ route('tags.show', $tag->slug) }}">
                                <x-tag-span class="text-lg py-2 px-4">
                                    {{ $tag->name }}
                                </x-tag-span>
                            </a>
                        @endforeach
                    </div>


                </article>

            </div>
        </div>
        <x-sidebar/>
    </div>

    <h3 class="font-bold text-gray-500 dark:text-gray-300 text-2xl my-10">{{ __('Related Posts') }}</h3>

    <div class="flex flex-col md:flex-row gap-4">
        @foreach($relatedPosts as $post)
            <x-card.latest-news class="sm:mx-1" :post="$post"/>
        @endforeach
    </div>

@endsection

@push('scripts')
    @vite(['resources/js/light-gallery/gallery.js', 'resources/js/light-gallery/single-photo.js'])
@endpush
