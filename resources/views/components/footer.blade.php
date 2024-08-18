<footer
    class="mt-32 bg-white pb-6 text-center shadow-inner dark:shadow-white/15 dark:bg-gray-800 sm:text-start md:pb-0">
    <x-container>
        <div class="pt-16 pb-6 lg:pt-24">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="mb-10">
                    <div class="col-span-full lg:col-span-2 lg:mb-0">
                        <a href="{{ route('home') }}"
                           class="flex items-center justify-center gap-2 text-lg font-bold text-black dark:text-white sm:justify-start">
                            <img src="{{ asset($settings->site_logo) }}"
                                 alt="logo" width="50">
                            <h5 class="rtl:text-xl text-2xl text-gray-900 dark:text-gray-200">
                                {{ __('Syrian Syriac Scout') }}
                            </h5>
                        </a>
                        <p class="py-8 text-sm text-gray-500 dark:text-gray-400 lg:max-w-xs">{{ __('hero-description') }}</p>
                    </div>
                </div>
                <div class="mb-10 pt-0 lg:pt-2 grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:col-span-2">

                    <x-footer-nav/>

                    <div class="rtl:lg:mr-0 rtl:lg:ml-auto lg:mx-auto">
                        <h4 class="mb-7 text-lg font-medium text-gray-900 dark:text-white">{{ __('Contact us') }}</h4>
                        <p class="mb-7 text-sm leading-6 text-gray-500 dark:text-gray-400">{{ __('contact form message') }}</p>
                        <x-round-button class="group mx-auto" link="{{ route('contact') }}">
                            {{ __('Contact us') }}
                            <span class="rtl:rotate-180 transition duration-300 ease-in-out rtl:group-hover:-translate-x-1.5 group-hover:translate-x-1.5">
                                &rarr;
                            </span>
                        </x-round-button>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-7 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center lg:flex-row lg:justify-between">
                <span
                    class="text-sm text-gray-500">©{{ __(config('app.name')) }} {{ date('Y') }}, {{ __('All rights reserved') }}.</span>
                    <div class="mt-4 flex gap-1 sm:justify-center lg:mt-0">
                        @foreach($settings?->social_network ?? [] as $name => $link)
                            <a href="{{ $link }}" target="_blank" class="transition duration-300 ease-in-out hover:scale-110">
                                <x-dynamic-component :component="'svg.' . $name"/>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</footer>
