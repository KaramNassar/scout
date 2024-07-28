@extends('layouts.app')

@section('header')
    <x-category-page-header :title="__('The Fourth Musical Scout Troop in Al-Hasakah')"></x-category-page-header>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto px-8 sm:px-6 md:max-w-3xl md:px-8 lg:px-0">
                <article class="dark:bg-gray-800 rounded-md px-0 lg:px-4">
                    <div class="prose dark:prose-invert max-w-full mb-16">

                        <p>In the heart of Al-Hasakah, a vibrant ensemble known as <strong>The Fourth Musical Scout
                                Troop</strong>
                            brings joy and unity through their melodious performances. Established in the early 2000s,
                            this troop
                            has become a symbol of cultural heritage and communal spirit in the region.</p>

                        <p>The troop, consisting of passionate young musicians, offers an array of performances that
                            blend
                            traditional Syrian music with contemporary tunes. Their repertoire includes classical
                            pieces, folk
                            melodies, and innovative compositions that captivate audiences of all ages.</p>

                        <p>Throughout the years, The Fourth Musical Scout Troop has not only entertained but also
                            educated the
                            community about the rich musical traditions of Syria. Their dedication to preserving and
                            promoting
                            cultural heritage has earned them admiration and support from local residents and
                            beyond.</p>

                        <p>Whether performing at local festivals, community events, or educational institutions, The
                            Fourth Musical
                            Scout Troop continues to inspire with their talent, creativity, and commitment to musical
                            excellence.
                            They stand as a testament to the power of music in fostering unity and celebrating
                            diversity.</p>
                    </div>

                    <p class="text-center text-sm sm:text-lg mb-4 text-gray-900 dark:text-gray-100"><-- {{ __('Swipe to view more photos') }} --></p>
                    <livewire:gallery/>

                </article>
            </div>
        </div>
        <x-sidebar/>
    </div>

@endsection
