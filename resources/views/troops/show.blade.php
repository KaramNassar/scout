@extends('layouts.app')

@section('seo')
    <x-seo :troop="$troop"/>
@endsection

@section('header')
    <x-page-header :title="$troop->name"/>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto px-1.5 md:max-w-3xl">
                <article class="dark:bg-gray-800 rounded-md">
                    @if($troop->featuredImage)

                        <div id="singlePhoto" class="mb-10">
                            <a class="item" href="{{  $troop->featuredImage->url }}">
                                <x-curator-glider :media="$troop->featuredImage"
                                                  class="rounded-xl"
                                                  quality="75"
                                                  format="webp"/>
                            </a>
                        </div>

                    @endif
                    <div class="prose dark:prose-invert max-w-full mb-16">

                        {!! $troop->description !!}

                    </div>

                </article>
            </div>
        </div>
        <x-sidebar/>
    </div>
    <h3 class="font-bold text-gray-500 dark:text-gray-300 text-2xl my-10">{{ __('Explore Other Troops') }}</h3>
    <x-swiper>
        @foreach($troops as $troop)

            <x-card.troop :troop="$troop"/>

        @endforeach
    </x-swiper>

@endsection

@push('scripts')
    @vite('resources/js/light-gallery/single-photo.js')
@endpush
