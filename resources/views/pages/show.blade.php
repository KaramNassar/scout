@extends('layouts.app')

@section('seo')
    <x-seo :page="$page"/>
@endsection

@section('header')
    <x-page-header :title="__($page->title)"/>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto px-1.5 md:max-w-3xl">
                <article class="dark:bg-gray-800 rounded-md">
                    @if($page->featuredImage)

                        <div id="singlePhoto" class="mb-10">
                            <a class="item" href="{{  $page->featuredImage->url }}">
                                <x-curator-glider :media="$page->featuredImage"
                                                  class="rounded-xl"
                                                  quality="75"
                                                  format="webp"
                                                  loading="lazy"/>
                            </a>
                        </div>

                    @endif
                    <div class="prose dark:prose-invert max-w-full mb-16">

                        {!! $page->content !!}

                    </div>

                </article>
            </div>
        </div>
        <x-sidebar/>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/light-gallery/single-photo.js')
@endpush
