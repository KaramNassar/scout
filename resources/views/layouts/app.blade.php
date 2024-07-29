@extends('layouts.base')

@section('body')

    <x-header/>

    @yield('hero')

    @yield('header')

    <x-container>
        @yield('content')
    </x-container>

    @isset($slot)
        {{ $slot }}
    @endisset

    <x-footer/>

    <x-share-buttons/>

@endsection

@push('scripts')
    <script>
        const lightSwitches = document.querySelectorAll('.light-switch');
        if (lightSwitches.length > 0) {
            lightSwitches.forEach((lightSwitch, i) => {
                if (localStorage.getItem('dark-mode') === 'true') {
                    lightSwitch.checked = true;
                }
                lightSwitch.addEventListener('change', () => {
                    const {checked} = lightSwitch;
                    lightSwitches.forEach((el, n) => {
                        if (n !== i) {
                            el.checked = checked;
                        }
                    });
                    if (lightSwitch.checked) {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('dark-mode', true);
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('dark-mode', false);
                    }
                });
            });
        }
    </script>
    <script>
        if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }
    </script>
@endpush
