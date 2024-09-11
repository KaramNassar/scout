<header class='sticky top-0 bg-white shadow-md z-[100] dark:bg-gray-800' x-data="{ mobileMenuIsOpen : false }"
        @click.away="mobileMenuIsOpen = false">
    <x-container>
        <section
            class='flex items-center justify-between py-2'>

            <a href="{{ route('home') }}" class="shrink-0">
                <img src="{{ asset('storage/' . $settings?->site_logo) }}" alt="logo" class='w-20'/>
            </a>

            <div class='absolute lg:relative flex flex-wrap justify-center px-10 py-3'>

                <div id="collapseMenu"
                     class='max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50'
                     :class="mobileMenuIsOpen ? 'block' : 'max-lg:hidden'"
                >
                    <button @click="mobileMenuIsOpen = false" id="toggleClose"
                            class='fixed top-2 right-4 rtl:left-4 rtl:right-auto rounded-full bg-white p-3 text-slate-700 z-[100] lg:hidden'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <x-nav-bar/>
                </div>
            </div>

            <div class="flex justify-between gap-2">
                <div class="flex items-center space-x-2">
                    <span class="relative">
                        <x-header.searchbar/>
                    </span>

                    <span class="relative">
                        <x-header.language-switcher/>
                    </span>

                    <span class="relative">
                        <x-header.theme-toggle-button/>
                    </span>
                </div>

                <button @click="mobileMenuIsOpen = true" id="toggleOpen"
                        class="text-slate-700 dark:text-slate-300 lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
        </section>

    </x-container>
</header>
