@extends('layouts.app')

@section('content')
    <x-header/>

    <x-hero/>

    <main class="container mx-auto px-4 lg:px-32">
        <x-stat-bar/>

        <x-content-showcase :heading="__('Featured Stories')">

        </x-content-showcase>

    </main>

@endsection
