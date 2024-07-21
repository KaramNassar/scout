@props(['title'])

<section class="sm:py-20 py-12 bg-gray-50 dark:bg-gray-700/50 mb-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 xl:max-w-7xl">
        <div class="md:justify-between md:flex-row items-center flex-col w-full flex">
            <div class="md:flex-row md:mt-0 md:order-1 items-center flex-col flex mt-8 order-2">
                <div class="md:text-start md:mt-0 md:ml-5 text-center mt-6">
                    <p class="text-red-700 tracking-wide uppercase text-xs leading-4 dark:text-pink-400">{{ __('Recent in') }}</p>
                    <h1 class="md:tracking-tight sm:text-3xl sm:leading-10 text-gray-900 dark:text-gray-100 tracking-normal font-medium text-2xl leading-9 mt-1.5">
                        {{ $title }}
                    </h1>
                </div>
            </div>
            <div class="md:order-2 order-1">
                <nav aria-label="breadcrumb" class="flex items-center text-[15px]">
                    <span class="group">
                        <a class="flex space-x-2 rtl:space-x-reverse hover:no-underline group-hover:text-gray-900 dark:group-hover:text-gray-100 transition ease-in-out duration-300 text-decoration-none text-gray-500 dark:text-gray-400 leading-[1.125rem] items-center" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="transition-all duration-150 ease-in-out text-gray-400 dark:text-gray-500 flex-shrink-0 w-[1.125rem] h-[1.125rem] -mt-1 group-hover:text-gray-900 dark:group-hover:text-gray-100">
                                <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ __('Home') }}</span>
                        </a>
                    </span>
                    <span class="sm:space-x-4 space-x-1.5 text-gray-400 dark:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="text-gray-400 dark:text-gray-500 w-5 h-5 rtl:scale-x-[-1]">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sm:space-x-4 space-x-1.5 text-red-600 dark:text-pink-400">Technology</span>
                </nav>
            </div>
        </div>
    </div>
</section>
