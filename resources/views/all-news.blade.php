@extends('layouts.app')

@section('header')
    <x-category-page-header :title="__('All News')"></x-category-page-header>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2">
            <div
                class="mx-auto max-w-xs p-4 sm:px-6 md:max-w-3xl md:px-8 lg:max-w-none lg:px-0">
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 dark:bg-gray-900 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022</time>

                            <a href="#">
                                <h3 class="text-lg text-gray-900 mt-0.5 dark:text-white">How to position your furniture
                                    for
                                    positivity</h3>
                            </a>

                            <p class="mt-2 text-gray-500 line-clamp-3 text-sm/relaxed dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                                quidem,
                                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                                dignissimos. Molestias explicabo corporis voluptatem?
                            </p>
                            <div class="mt-4 flex flex-wrap gap-1">
                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    Snippet
                                </span>

                                <span
                                    class="whitespace-nowrap rounded-full bg-purple-100 text-xs text-purple-600 px-2.5 py-0.5 dark:bg-purple-600 dark:text-purple-100"
                                >
                                    JavaScript
                                </span>
                            </div>
                            <a href="#"
                               class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 group">
                                Find out more

                                <span aria-hidden="true" class="block rtl:rotate-180 transition-all group-hover:ms-0.5">
                                    &rarr;
                                </span>
                            </a>

                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div
            class="mx-auto w-full px-4 py-4 space-y-6 sm:mt-16 sm:px-6 md:mt-12 md:max-w-3xl md:px-8 lg:col-span-1 lg:mt-0 lg:max-w-none lg:px-0">

            <div class="w-full rounded-2xl bg-gray-50 p-5 dark:bg-gray-700 sm:p-8">
                <h3 class="relative border-b border-gray-300/70 dark:border-gray-500 text-2xl font-medium text-gray-900 dark:text-gray-100 pb-2.5 before:content-[''] before:bg-red-600 before:w-24 before:h-px rtl:before:right-0 before:-bottom-px before:absolute">
                    {{ __('search') }}
                </h3>
                <div class="pt-6">
                    <form action="/search" method="GET" class="relative rtl:text-right">
                        <input
                            type="text"
                            name="query"
                            placeholder="{{ __('search in website') }}"
                            class="w-full rounded-full border border-gray-300 bg-gray-100 px-4 py-2 rtl:pr-4 rtl:pl-10 text-sm leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-red-500 dark:placeholder-gray-400 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-red-300">
                        <button type="submit"
                                class="absolute top-1/2 right-2 rtl:right-auto rtl:left-2 -translate-y-1/2 transform text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>


            <div class="w-full rounded-2xl bg-gray-50 p-5 dark:bg-gray-700 sm:p-8">
                <h3
                    class="relative border-b border-gray-300/70 dark:border-gray-500 text-2xl font-medium text-gray-900 dark:text-gray-100 pb-2.5 before:content-[''] before:bg-red-600 before:w-24 before:h-px rtl:before:right-0 before:-bottom-px before:absolute">
                    {{ __('Featured') }}
                </h3>
                <div class="pt-6 space-y-6">
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
            </div>


            <div class="w-full rounded-2xl bg-gray-50 p-5 dark:bg-gray-700 sm:p-8">
                <h3
                    class="relative border-b border-gray-300/70 dark:border-gray-500 text-2xl font-medium text-gray-900 dark:text-gray-100 pb-2.5 before:content-[''] before:bg-red-600 before:w-24 before:h-px rtl:before:right-0 before:-bottom-px before:absolute">
                    {{ __('Popular tags') }}
                </h3>
                <div class="pt-6">
                    <ul class="-m-1 flex flex-wrap justify-start">
                        <li>
                            <a href="/tags/work">
                        <span
                            class="whitespace-nowrap rounded-full border border-gray-300 text-xs px-2.5 py-0.5 hover:text-red-700 dark:border-gray-600 dark:text-gray-100 dark:hover:text-pink-500">
                            Work
                        </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="w-full rounded-2xl bg-gray-50 p-5 dark:bg-gray-700 sm:p-8">
                <h3
                    class="relative border-b border-gray-300/70 dark:border-gray-500 text-2xl font-medium text-gray-900 dark:text-gray-100 pb-2.5 before:content-[''] before:bg-red-600 before:w-24 before:h-px rtl:before:right-0 before:-bottom-px before:absolute">
                    {{ __('Follow us') }}
                </h3>
                <div class="pt-6">

                    <div class="overflow-hidden">

                        <a
                            class="flex w-full items-center justify-between group"
                            href="#">
                            <div class="flex items-center gap-2">
                                <div>
                                    <span
                                        class="absolute h-1 w-1 overflow-hidden p-0 m-neg-1 clip-rect-0">Facebook</span>
                                    <span
                                        class="relative w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-[#337FFF]  hover:bg-gray-900">
                                        <svg class="text-white w-[1rem] h-[1rem]" viewBox="0 0 8 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.04111 7.81204L7.41156 5.46043H5.1296V3.93188C5.1296 3.28886 5.44818 2.66054 6.46692 2.66054H7.51899V0.657999C6.90631 0.560385 6.28723 0.507577 5.66675 0.5C3.78857 0.5 2.56239 1.62804 2.56239 3.66733V5.46043H0.480469V7.81204H2.56239V13.5H5.1296V7.81204H7.04111Z"
                                                fill="currentColor"/>
                                        </svg>

                                    </span>
                                </div>
                                <div class="group-hover:text-blue-600 dark:text-gray-100">
                                    {{ __('Facebook') }}
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true"
                                     class="mx-2 h-5 w-5 rtl:rotate-180 text-red-400 transition duration-300 ease-in-out group-hover:translate-x-1.5 group-hover:text-red-600">
                                    <path fill-rule="evenodd"
                                          d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                        <hr class="w-full border-t border-dashed border-gray-300/70 ml-13 my-2.5 dark:border-gray-300/30">

                        <a
                            class="flex w-full items-center justify-between group"
                            href="#">
                            <div class="flex items-center gap-2">
                                <div>
                                    <span
                                        class="absolute h-1 w-1 overflow-hidden p-0 m-neg-1 clip-rect-0">Instagram</span>
                                    <span
                                        class="w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-[linear-gradient(45deg,#FEE411_6.9%,#FEDB16_10.98%,#FEC125_17.77%,#FE983D_26.42%,#FE5F5E_36.5%,#FE2181_46.24%,#9000DC_85.57%)]  hover:bg-gradient-to-b from-gray-900 to-gray-900">
                                        <svg class="text-white w-[1.25rem] h-[1.125rem]" viewBox="0 0 16 16"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.63434 7.99747C5.63434 6.69062 6.6941 5.63093 8.00173 5.63093C9.30936 5.63093 10.3697 6.69062 10.3697 7.99747C10.3697 9.30431 9.30936 10.364 8.00173 10.364C6.6941 10.364 5.63434 9.30431 5.63434 7.99747ZM4.35427 7.99747C4.35427 10.0108 5.98723 11.6427 8.00173 11.6427C10.0162 11.6427 11.6492 10.0108 11.6492 7.99747C11.6492 5.98418 10.0162 4.3522 8.00173 4.3522C5.98723 4.3522 4.35427 5.98418 4.35427 7.99747ZM10.9412 4.20766C10.9411 4.37615 10.991 4.54087 11.0846 4.681C11.1783 4.82113 11.3113 4.93037 11.4671 4.99491C11.6228 5.05945 11.7942 5.07639 11.9595 5.04359C12.1249 5.01078 12.2768 4.92971 12.3961 4.81062C12.5153 4.69153 12.5966 4.53977 12.6295 4.37453C12.6625 4.2093 12.6457 4.03801 12.5812 3.88232C12.5168 3.72663 12.4076 3.59354 12.2674 3.49988C12.1273 3.40622 11.9625 3.35619 11.7939 3.35612H11.7936C11.5676 3.35623 11.3509 3.44597 11.1911 3.60563C11.0313 3.76529 10.9414 3.98182 10.9412 4.20766ZM5.132 13.7759C4.43946 13.7444 4.06304 13.6291 3.81289 13.5317C3.48125 13.4027 3.24463 13.249 2.99584 13.0007C2.74705 12.7524 2.59305 12.5161 2.46451 12.1847C2.367 11.9348 2.25164 11.5585 2.22016 10.8664C2.18572 10.1181 2.17885 9.89331 2.17885 7.99752C2.17885 6.10174 2.18629 5.87758 2.22016 5.12866C2.2517 4.43654 2.36791 4.06097 2.46451 3.81035C2.59362 3.47891 2.7474 3.24242 2.99584 2.99379C3.24428 2.74515 3.48068 2.59124 3.81289 2.46278C4.06292 2.36532 4.43946 2.25004 5.132 2.21857C5.88074 2.18416 6.10566 2.17729 8.00173 2.17729C9.89779 2.17729 10.1229 2.18472 10.8723 2.21857C11.5648 2.25009 11.9406 2.36623 12.1914 2.46278C12.5231 2.59124 12.7597 2.74549 13.0085 2.99379C13.2573 3.24208 13.4107 3.47891 13.5398 3.81035C13.6373 4.06023 13.7527 4.43654 13.7841 5.12866C13.8186 5.87758 13.8255 6.10174 13.8255 7.99752C13.8255 9.89331 13.8186 10.1175 13.7841 10.8664C13.7526 11.5585 13.6367 11.9347 13.5398 12.1847C13.4107 12.5161 13.2569 12.7526 13.0085 13.0007C12.76 13.2488 12.5231 13.4027 12.1914 13.5317C11.9414 13.6292 11.5648 13.7444 10.8723 13.7759C10.1236 13.8103 9.89865 13.8172 8.00173 13.8172C6.10481 13.8172 5.88051 13.8103 5.132 13.7759ZM5.07318 0.941429C4.31699 0.975845 3.80027 1.09568 3.34902 1.27116C2.88168 1.45239 2.48605 1.69552 2.09071 2.09C1.69537 2.48447 1.45272 2.88049 1.27139 3.34755C1.0958 3.79882 0.975892 4.31494 0.941455 5.07068C0.90645 5.82761 0.898438 6.0696 0.898438 7.99747C0.898438 9.92534 0.90645 10.1673 0.941455 10.9243C0.975892 11.68 1.0958 12.1961 1.27139 12.6474C1.45272 13.1142 1.69543 13.5106 2.09071 13.9049C2.48599 14.2992 2.88168 14.542 3.34902 14.7238C3.80113 14.8993 4.31699 15.0191 5.07318 15.0535C5.83096 15.0879 6.0727 15.0965 8.00173 15.0965C9.93075 15.0965 10.1729 15.0885 10.9303 15.0535C11.6865 15.0191 12.2029 14.8993 12.6544 14.7238C13.1215 14.542 13.5174 14.2994 13.9127 13.9049C14.3081 13.5105 14.5502 13.1142 14.7321 12.6474C14.9077 12.1961 15.0281 11.68 15.062 10.9243C15.0964 10.1668 15.1044 9.92534 15.1044 7.99747C15.1044 6.0696 15.0964 5.82761 15.062 5.07068C15.0276 4.31489 14.9077 3.79853 14.7321 3.34755C14.5502 2.88077 14.3075 2.4851 13.9127 2.09C13.518 1.69489 13.1215 1.45239 12.655 1.27116C12.2029 1.09568 11.6865 0.975277 10.9308 0.941429C10.1735 0.907013 9.93132 0.898438 8.00229 0.898438C6.07327 0.898438 5.83096 0.906445 5.07318 0.941429Z"
                                                fill="white"/>
                                        </svg>

                                    </span>
                                </div>
                                <div class="group-hover:text-instagram dark:text-gray-100">
                                    {{ __('Instagram') }}
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true"
                                     class="mx-2 h-5 w-5 rtl:rotate-180 text-red-400 transition duration-300 ease-in-out group-hover:translate-x-1.5 group-hover:text-red-600">
                                    <path fill-rule="evenodd"
                                          d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                          clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </a>
                        <hr class="w-full border-t border-dashed border-gray-300/70 ml-13 my-2.5 dark:border-gray-300/30">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
