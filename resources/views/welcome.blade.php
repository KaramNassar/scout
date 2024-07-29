@extends('layouts.app')

@section('hero')
    <x-hero/>
@endsection

@section('content')

    <x-stat-bar/>

    <x-content-showcase :heading="__('Featured Stories')"  data-aos="fade-left">
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

    <x-content-showcase :heading="__('Latest News')" data-aos="fade-right">
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

    </x-content-showcase>

    <x-content-showcase :heading="__('Activities')" data-aos="fade-up">
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

    <x-content-showcase :heading="__('Where We Work')" data-aos="fade-left">
        <livewire:map/>
    </x-content-showcase>

@endsection

