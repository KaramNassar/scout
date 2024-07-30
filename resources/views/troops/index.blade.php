@extends('layouts.app')


@section('header')
    <x-page-header :title="__('Syrian Syriac Scout Troops')"/>
@endsection


@section('content')

    <x-timeline :troops="$troops"/>

@endsection
