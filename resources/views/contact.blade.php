@php use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting; @endphp
@extends('layouts.app')

@php
    \seo()
           ->title(__('Syrian Syrian Scout') . ': ' . __('contact'), '')
           ->description(__('Syrian Syrian Scout') . ': ' . __('contact'), '')
           ->images(
               asset('storage/' . GeneralSetting::first()->hero_image)
           );
@endphp
@section('header')
    <x-page-header :title="__('Contact us')"/>
@endsection

@section('content')

    <div
        class="grid md:grid-cols-2 gap-16 p-8 mx-auto max-w-4xl shadow rounded-md text-[#333] dark:text-gray-50 dark:bg-gray-700">
        <div>
            <p class="text-gray-900 dark:text-gray-200">
                {{ __('contact form message') }}
            </p>

            <div class="mt-12">
                <h2 class="text-lg font-medium">{{ __('Follow Us On') }}:</h2>
                <div class="mt-3 flex flex-wrap gap-1">
                    @foreach($settings->social_network as $name => $link)
                        @if($link)
                            <a href="{{ $link }}" class="mb-2 transition duration-300 ease-in-out hover:scale-110">
                                <x-dynamic-component :component="'svg.' . $name"/>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <livewire:contact-form/>
    </div>

@endsection
