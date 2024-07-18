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
    <h1 class="text-2xl lg:text-4xl font-bold text-gray-900 dark:text-white mt-20">
        {{ __('The Fourth Musical Scout Troop in Al-Hasakah') }}
    </h1>
    <div class="flex flex-col gap-4 lg:flex-row mt-20">
        <article class="basis-3/4 bg-white dark:bg-gray-800 py-4 rounded-md px-0 lg:px-4">
            <div class="prose dark:prose-invert max-w-full">

                <p>In the heart of Al-Hasakah, a vibrant ensemble known as <strong>The Fourth Musical Scout Troop</strong>
                    brings joy and unity through their melodious performances. Established in the early 2000s, this troop
                    has become a symbol of cultural heritage and communal spirit in the region.</p>

                <p>The troop, consisting of passionate young musicians, offers an array of performances that blend
                    traditional Syrian music with contemporary tunes. Their repertoire includes classical pieces, folk
                    melodies, and innovative compositions that captivate audiences of all ages.</p>

                <p>Throughout the years, The Fourth Musical Scout Troop has not only entertained but also educated the
                    community about the rich musical traditions of Syria. Their dedication to preserving and promoting
                    cultural heritage has earned them admiration and support from local residents and beyond.</p>

                <p>Whether performing at local festivals, community events, or educational institutions, The Fourth Musical
                    Scout Troop continues to inspire with their talent, creativity, and commitment to musical excellence.
                    They stand as a testament to the power of music in fostering unity and celebrating diversity.</p>
            </div>

        </article>
        <aside
            class="min-w-80 lg:w-1/3 basis-1/4 bg-gray-100/50 dark:bg-gray-700/50 p-4 rounded-md mt-8 lg:mt-0"
            aria-labelledby="sidebar-label">
            <div class="mb-6">
                <h4 id="sidebar-label"
                    class="text-md font-semibold text-gray-900 dark:text-white">{{ __('search') }}</h4>
                <div class="mt-4">
                    <form action="#" method="GET" class="mb-4">
                        <label for="search" class="sr-only">Search</label>
                        <input type="text" id="search" name="search" placeholder="{{ __('Search in the website') }}"
                               class="w-full px-4 py-2 rounded-md dark:bg-gray-600 text-gray-800 dark:text-gray-200 dark:placeholder-gray-300  focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-600">
                    </form>
                </div>
            </div>
            <div class="mb-6">
                <h4 class="text-md font-semibold text-gray-800 dark:text-gray-300">{{ __('Latest Troop News') }}</h4>
                <div class="mt-4 space-y-4">
                    <div class="flex space-x-6 rtl:space-x-reverse">
                        <a href="#" class="flex-shrink-0 mt-2">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/image-1.png"
                                 class="w-16 h-16 rounded-md" alt="Image 1">
                        </a>
                        <div>
                            <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Our first office</h5>
                            <p class="text-gray-600 dark:text-gray-400">Over the past year, Volosoft has undergone
                                changes.</p>
                            <a href="#" class="text-blue-400 hover:underline">{{ __('Read more') }}</a>
                        </div>
                    </div>
                    <div class="flex space-x-6 rtl:space-x-reverse">
                        <a href="#" class="flex-shrink-0 mt-2">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/image-2.png"
                                 class="w-16 h-16 rounded-md" alt="Image 2">
                        </a>
                        <div>
                            <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Enterprise Design tips</h5>
                            <p class="text-gray-600 dark:text-gray-400">Over the past year, Volosoft has undergone
                                changes.</p>
                            <a href="#" class="text-blue-600 hover:underline">Read in 14 minutes</a>
                        </div>
                    </div>
                    <div class="flex space-x-6 rtl:space-x-reverse">
                        <a href="#" class="flex-shrink-0 mt-2">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/image-3.png"
                                 class="w-16 h-16 rounded-md" alt="Image 3">
                        </a>
                        <div>
                            <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Partnered up with
                                Google</h5>
                            <p class="text-gray-600 dark:text-gray-400">Over the past year, Volosoft has undergone
                                changes.</p>
                            <a href="#" class="text-blue-600 hover:underline">Read in 9 minutes</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5 text-gray-800 dark:text-gray-300">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5"/>
                    </svg>
                    <h4 class="text-md font-semibold text-gray-800 dark:text-gray-300">{{ __('Tags') }}</h4>

                </div>
                <div class="flex flex-wrap gap-2">
                    <a href="#"
                       class="bg-gray-100 dark:bg-gray-700 dark:text-gray-100 rounded-full text-xs px-3 py-2 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-300">Tag
                        1</a>
                    <a href="#"
                       class="bg-gray-100 dark:bg-gray-700 dark:text-gray-100 rounded-full text-xs px-3 py-2 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-300">Tag
                        2</a>
                    <a href="#"
                       class="bg-gray-100 dark:bg-gray-700 dark:text-gray-100 rounded-full text-xs px-3 py-2 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-300">Tag
                        3</a>
                    <!-- Add more tags as needed -->
                </div>
            </div>


        </aside>

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
@endsection
