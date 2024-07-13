<header class="bg-white shadow-sm dark:bg-gray-800 sticky top-0 z-[1000]">

    <div class="container mx-auto px-4 lg:px-8 xl:max-w-7xl">
        <nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false"
             class="flex items-center justify-between gap-2 py-4" aria-label="penguin ui menu">
            <div class="flex items-center">
                <a href="{{ route('home') }}"
                   class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300">
                    <a href="{{ url('') }}"
                       class="text-lg font-bold text-black dark:text-white flex items-center gap-2">
                        <img src="{{ \Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting::value('site_logo') }}" alt="logo" width="50">
                        @if(app()->getLocale() === 'ar')
                            <x-logo.ar-light/>
                            <x-logo.ar-dark/>
                        @else
                            <x-logo.en-light/>
                            <x-logo.en-dark/>
                        @endif

                    </a>
                </a>
            </div>

            <div>
                <x-header.desktop-menu/>
            </div>

            <div class="flex items-center sm:gap-2">
                <x-header.searchbar/>

                <x-header.language-switcher/>

                <x-header.theme-toggle-button/>

                <x-header.mobile-menu/>

            </div>
        </nav>

    </div>
</header>

