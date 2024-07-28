<header class="sticky top-0 bg-white shadow-sm z-[100] dark:bg-gray-800">

    <x-container>
        <nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false"
             class="flex items-center justify-between gap-2 py-2" aria-label="penguin ui menu">
            <div class="flex items-center">
                <a href="{{ route('home') }}"
                   class="inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 group hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300">
                    <a href="{{ url('') }}"
                       class="flex items-center gap-2 text-lg font-bold text-black dark:text-white">
                        <img
                            src="{{ asset($settings->site_logo) }}"
                            alt="logo" width="50">
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

    </x-container>
</header>

