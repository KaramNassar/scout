@extends('layouts.app')

@section('header')
    <x-page-header :title="__('404_title')"/>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <h1 class="text-xl text-gray-900 dark:text-gray-200">
                {{ __('404_message') }}
                <a href="/" class="text-main-light dark:text-main-dark">{{ __('Homepage') }}</a>.
            </h1>
        </div>
        <x-sidebar/>
    </div>

@endsection
