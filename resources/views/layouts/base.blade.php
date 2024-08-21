<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
      x-data="{ openSearch: false, showMapModal: false }"
      x-bind:class="{ 'overflow-hidden': openSearch ||  showMapModal }" x-cloak>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('seo')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/' . $settings->site_favicon) }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! $settings->more_configs['header_code'] !!}
</head>

<body class="dark:bg-gray-800 font-roboto rtl:font-cairo">
@yield('body')

@stack('scripts')

{!! $settings->more_configs['footer_code'] !!}

</body>
</html>
