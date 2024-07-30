@extends('layouts.app')

@section('content')
    <h1 class="text-2xl text-center md:text-start lg:text-4xl font-bold text-gray-900 dark:text-white my-20">
        {{ $troop->name }}
    </h1>

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto px-1.5 md:max-w-3xl">
                <article class="dark:bg-gray-800 rounded-md">

                    <div id="singlePhoto" class="mb-10">
                        <a class="item" href="{{ $troop->getFirstMedia('troops')->getUrl() }}">
                            <x-img :src="$troop->getFirstMedia('troops')->getUrl()" :alt="$troop->name"
                                   class="rounded-lg h-96"/>
                        </a>
                    </div>

                    <div class="prose dark:prose-invert max-w-full mb-16">

                        {!! $troop->description !!}

                    </div>

                </article>
            </div>
        </div>
        <x-sidebar/>
    </div>
    <h3 class="font-bold text-gray-500 dark:text-gray-300 text-2xl mt-10 mb-10">{{ __('Explore Other Troops') }}</h3>
    <x-swiper>
        @foreach($troops as $troop)

            <x-card.troop :troop="$troop"/>

        @endforeach

    </x-swiper>

@endsection

@push('scripts')
    @vite('resources/js/light-gallery/single-photo.js')
@endpush
