@extends('layouts.app')

@section('header')
    <header
        class="relative bg-[url('https://scout.test/hero-bg.jpg')] bg-cover bg-center bg-no-repeat">
        <div
            class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
        ></div>
    </header>
@endsection

@section('content')
    <h1 class="text-2xl lg:text-4xl font-bold text-gray-900 dark:text-white my-20">
        {{ __('The Fourth Musical Scout Troop in Al-Hasakah') }}
    </h1>

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto px-8 md:max-w-3xl lg:px-0">
                <article class="dark:bg-gray-800 rounded-md px-0">
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


                    <h3 class="font-bold text-gray-500 dark:text-gray-300 text-2xl mt-40 mb-10">{{ __('Explore Other Troops') }}</h3>
                    <x-swiper>
                        <x-card.latest-news :src="asset('storage/images/1.jpg')"
                                            :post="['title' => 'World Scout Movement', 'excerpt' => 'Here are the biggest enterprise technology acquisitions of 2021 so far']"></x-card.latest-news>
                        <x-card.latest-news :src="asset('storage/images/2.jpg')"
                                            :post="['title' => 'World Scout Movement', 'excerpt' => 'Here are the biggest enterprise technology acquisitions of 2021 so far']"></x-card.latest-news>
                        <x-card.latest-news :src="asset('storage/images/3.jpg')"
                                            :post="['title' => 'World Scout Movement', 'excerpt' => 'Here are the biggest enterprise technology acquisitions of 2021 so far']"></x-card.latest-news>
                        <x-card.latest-news :src="asset('storage/images/4.jpg')"
                                            :post="['title' => 'World Scout Movement', 'excerpt' => 'Here are the biggest enterprise technology acquisitions of 2021 so far']"></x-card.latest-news>
                        <x-card.latest-news :src="asset('storage/images/5.jpg')"
                                            :post="['title' => 'World Scout Movement', 'excerpt' => 'Here are the biggest enterprise technology acquisitions of 2021 so far']"></x-card.latest-news>
                        <x-card.latest-news :src="asset('storage/images/6.jpg')"
                                            :post="['title' => 'World Scout Movement', 'excerpt' => 'Here are the biggest enterprise technology acquisitions of 2021 so far']"></x-card.latest-news>

                    </x-swiper>
                </article>
            </div>
        </div>
        <x-sidebar/>
    </div>

@endsection
