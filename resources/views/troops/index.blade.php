@extends('layouts.app')

@php
    $page = new \App\Models\Page();
    $page->title = __('Syrian Syriac Scout Troops');
    $page->content =  __('Syrian Syriac Scout Troops');
@endphp

@section('seo')
    <x-seo :page="$page"/>
@endsection

@section('header')
    <x-page-header :title="__('Syrian Syriac Scout Troops')"/>
@endsection


@section('content')

    <x-timeline :troops="$troops"/>

@endsection
