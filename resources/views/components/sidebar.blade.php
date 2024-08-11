<div
    class="mx-auto w-full px-4 space-y-6 sm:mt-16 sm:px-6 md:mt-12 md:max-w-3xl md:px-8 lg:col-span-1 lg:mt-0 lg:max-w-none lg:px-0">

    <x-sidebar-section :title="__('search')">
        <form action="{{ route('search-results') }}" method="GET" class="relative rtl:text-right">
            <input
                type="text"
                name="query"
                value="{{ request('query') }}"
                placeholder="{{ __('search in website') }}"
                class="w-full rounded-full border border-gray-300 bg-gray-100 px-4 py-2 rtl:pr-4 rtl:pl-10 text-sm leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-main-light focus:border-main-light dark:placeholder-gray-400 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-main-dark"
                required>
            <button type="submit"
                    class="absolute top-1/2 right-2 rtl:right-auto rtl:left-2 -translate-y-1/2 transform text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                </svg>
            </button>
        </form>
    </x-sidebar-section>

    <x-sidebar-section :title="__('Featured')">
        <div class="space-y-6">
            <article class="flex gap-4">
                <a
                    class="relative z-10 h-24 w-24 overflow-hidden rounded-lg bg-gray-100 dark:bg-gray-700 sm:h-28 sm:w-28 lg:h-20 lg:w-20"
                    href="/articles/the-best-monitors-in-the-market">
                    <img
                        alt="The 7 Best Monitors in the Market" loading="lazy" decoding="async" data-nimg="fill"
                        class="absolute inset-0 h-full w-full object-cover object-center text-transparent transition duration-300 ease-in-out"
                        src="{{ asset('storage/images/1.jpg') }}">
                </a>
                <div class="w-2/3 space-x-4 sm:space-x-6 lg:space-x-4">
                    <div
                        class="flex h-full w-full flex-1 flex-col justify-center">
                        <div>
                            <a class="font-medium leading-snug tracking-normal text-gray-900 transition duration-300 ease-in-out text-decoration-2 text-md hover:underline dark:text-gray-100"
                               href="/articles/the-best-monitors-in-the-market">
                                The 7 Best Monitors in the Market
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex gap-4">
                <a
                    class="relative z-10 h-24 w-24 overflow-hidden rounded-lg bg-gray-100 dark:bg-gray-700 sm:h-28 sm:w-28 lg:h-20 lg:w-20"
                    href="/articles/the-best-monitors-in-the-market">
                    <img
                        alt="The 7 Best Monitors in the Market" loading="lazy" decoding="async" data-nimg="fill"
                        class="absolute inset-0 h-full w-full object-cover object-center text-transparent transition duration-300 ease-in-out"
                        src="{{ asset('storage/images/1.jpg') }}">
                </a>
                <div class="w-2/3 space-x-4 sm:space-x-6 lg:space-x-4">
                    <div
                        class="flex h-full w-full flex-1 flex-col justify-center">
                        <div>
                            <a class="font-medium leading-snug tracking-normal text-gray-900 transition duration-300 ease-in-out text-decoration-2 text-md hover:underline dark:text-gray-100"
                               href="/articles/the-best-monitors-in-the-market">
                                The 7 Best Monitors in the Market
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex gap-4">
                <a
                    class="relative z-10 h-24 w-24 overflow-hidden rounded-lg bg-gray-100 dark:bg-gray-700 sm:h-28 sm:w-28 lg:h-20 lg:w-20"
                    href="/articles/the-best-monitors-in-the-market">
                    <img
                        alt="The 7 Best Monitors in the Market" loading="lazy" decoding="async" data-nimg="fill"
                        class="absolute inset-0 h-full w-full object-cover object-center text-transparent transition duration-300 ease-in-out"
                        src="{{ asset('storage/images/1.jpg') }}">
                </a>
                <div class="w-2/3 space-x-4 sm:space-x-6 lg:space-x-4">
                    <div
                        class="flex h-full w-full flex-1 flex-col justify-center">
                        <div>
                            <a class="font-medium leading-snug tracking-normal text-gray-900 transition duration-300 ease-in-out text-decoration-2 text-md hover:underline dark:text-gray-100"
                               href="/articles/the-best-monitors-in-the-market">
                                The 7 Best Monitors in the Market
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </x-sidebar-section>


    <x-sidebar-section :title="__('Popular tags')">
        <ul class="-m-1 flex flex-wrap gap-1 justify-start">
            <li>
                <a href="/tags/work">
                    <span
                        class="whitespace-nowrap rounded-full border border-gray-300 text-xs px-2.5 py-0.5 hover:text-main-light dark:border-gray-600 dark:text-gray-100 dark:hover:text-main-dark">
                        News
                    </span>
                </a>
            </li>
            <li>
                <a href="/tags/work">
                    <span
                        class="whitespace-nowrap rounded-full border border-gray-300 text-xs px-2.5 py-0.5 hover:text-main-light dark:border-gray-600 dark:text-gray-100 dark:hover:text-main-dark">
                        Work
                    </span>
                </a>
            </li>
            <li>
                <a href="/tags/work">
                    <span
                        class="whitespace-nowrap rounded-full border border-gray-300 text-xs px-2.5 py-0.5 hover:text-main-light dark:border-gray-600 dark:text-gray-100 dark:hover:text-main-dark">
                        Camps
                    </span>
                </a>
            </li>
        </ul>
    </x-sidebar-section>


    <x-sidebar-section :title="__('Follow us')">
        <div class="overflow-hidden">
            @foreach($settings->social_network as $name => $link)
                <x-social-link :name="$name" :link="$link"/>
                <hr class="w-full border-t border-dashed border-gray-300/70 ml-13 my-2.5 dark:border-gray-300/30">
            @endforeach
        </div>
    </x-sidebar-section>
</div>
