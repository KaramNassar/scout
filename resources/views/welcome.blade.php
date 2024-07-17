@extends('layouts.app')

@section('hero')
    <x-hero/>
@endsection

@section('content')

    <x-stat-bar/>

    <x-content-showcase :heading="__('Featured Stories')">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-md:max-w-md mx-auto">
            <x-card.featured :src="asset('storage/images/1.jpg')"
                             address="National Scout Organizations"></x-card.featured>
            <x-card.featured :src="asset('storage/images/2.jpg')"
                             address="EU Youth Empowerment Fund through the Global Youth"></x-card.featured>
            <x-card.featured :src="asset('storage/images/3.jpg')" address="World Scout Movement"></x-card.featured>
            <x-card.featured :src="asset('storage/images/4.jpg')" address="World Organization"></x-card.featured>
            <x-card.featured :src="asset('storage/images/5.jpg')"
                             address="The 2023 World Scouting Review"></x-card.featured>
            <x-card.featured :src="asset('storage/images/6.jpg')"
                             address="World Scout Leaders to Convene in  Cairo for Momentous 43rd World Scout Conference"></x-card.featured>
        </div>

    </x-content-showcase>

    <x-content-showcase :heading="__('Latest News')">
        <div class="swiper multiple-slide-carousel swiper-container relative">
            <div class="swiper-wrapper mb-16">
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

            </div>
            <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                <button id="slider-button-left"
                        class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 dark:border-gray-300 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-purple dark:hover:bg-pink-500 !-translate-x-16 z-10"
                        data-carousel-prev>
                    <svg class="h-5 w-5 text-indigo-600 dark:text-gray-300 group-hover:text-white"
                         xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="slider-button-right"
                        class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 dark:border-gray-300 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-purple dark:hover:bg-pink-500 !translate-x-16 z-10"
                        data-carousel-next>
                    <svg class="h-5 w-5 text-indigo-600 dark:text-gray-300 group-hover:text-white"
                         xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                              stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

    </x-content-showcase>

    <x-content-showcase :heading="__('Activities')">
        <div class="w-full h-full">
            <div class="max-w-6xl mx-auto">
                <ul class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5">

                    <li>
                        <x-card.gallery title="How we design and code open-source projects?"
                                        :src="asset('storage/images/7.jpg')"/>
                    </li>

                    <li>
                        <x-card.gallery title="How we design and code open-source projects?"
                                        :src="asset('storage/images/5.jpg')"/>
                    </li>

                    <li>
                        <x-card.gallery title="How we design and code open-source projects?"
                                        :src="asset('storage/images/3.jpg')"/>
                    </li>

                    <li>
                        <x-card.gallery title="How we design and code open-source projects?"
                                        :src="asset('storage/images/4.jpg')"/>
                    </li>

                    <li>
                        <x-card.gallery title="How we design and code open-source projects?"
                                        :src="asset('storage/images/2.jpg')"/>
                    </li>

                    <li>
                        <x-card.gallery title="How we design and code open-source projects?"
                                        :src="asset('storage/images/1.jpg')"/>
                    </li>

                </ul>
            </div>

        </div>
    </x-content-showcase>

    <x-content-showcase :heading="__('Where We Work')">
        <livewire:map/>
    </x-content-showcase>

@endsection

