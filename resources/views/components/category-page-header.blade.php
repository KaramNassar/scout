@props(['title'])

<section class="mb-16 bg-gray-50 py-12 dark:bg-gray-700/50 sm:py-20">
    <x-container>
        <div class="flex w-full flex-col items-center lg:flex-row lg:justify-between">
            <div class="mt-6 text-center md:ml-5 md:text-start lg:mt-0 order-2 lg:order-1">
                <h1 class="text-2xl font-medium leading-9 text-gray-900 dark:text-gray-100 sm:text-3xl">
                    {!! $title !!}
                </h1>
            </div>
            <div class="order-1 lg:order-2">
                <nav aria-label="breadcrumb" class="flex items-center text-[15px]">
                    <span class="group">
                        <a class="flex items-center text-gray-500 transition duration-300 ease-in-out space-x-2 rtl:space-x-reverse text-decoration-none leading-[1.125rem] group-hover:text-gray-900 hover:no-underline dark:text-gray-400 dark:group-hover:text-gray-100"
                           href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true"
                                 class="-mt-1 flex-shrink-0 text-gray-400 transition-all duration-150 ease-in-out w-[1.125rem] h-[1.125rem] group-hover:text-gray-900 dark:text-gray-500 dark:group-hover:text-gray-100">
                                <path fill-rule="evenodd"
                                      d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ __('Home') }}</span>
                        </a>
                    </span>
                    <span class="text-gray-400 space-x-1.5 dark:text-gray-500 sm:space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true" class="h-5 w-5 text-gray-400 rtl:scale-x-[-1] dark:text-gray-500">
                            <path fill-rule="evenodd"
                                  d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="text-main-light dark:text-main-dark space-x-1.5 dark:text-pink-400 sm:space-x-4">Technology</span>
                </nav>
            </div>
        </div>
    </x-container>
</section>
