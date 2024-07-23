@extends('layouts.app')

@section('header')
    <x-category-page-header :title="__('All News')"></x-category-page-header>
@endsection

@section('content')

    <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <div class="col-span-2 mb-16">
            <div
                class="mx-auto max-w-xs sm:px-6 md:max-w-3xl md:px-8 lg:max-w-none lg:px-0">
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="relative overflow-hidden pb-0 md:pb-10 rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
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
                            <a href="#">
                                <x-read-more />
                            </a>

                        </div>
                    </article><article class="relative overflow-hidden pb-0 md:pb-10 rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
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
                            <a href="#">
                                <x-read-more />
                            </a>

                        </div>
                    </article><article class="relative overflow-hidden pb-0 md:pb-10 rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
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
                            <a href="#">
                                <x-read-more />
                            </a>

                        </div>
                    </article><article class="relative overflow-hidden pb-0 md:pb-10 rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
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
                            <a href="#">
                                <x-read-more />
                            </a>

                        </div>
                    </article><article class="relative overflow-hidden pb-0 md:pb-10 rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
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
                            <a href="#">
                                <x-read-more />
                            </a>

                        </div>
                    </article>

                </div>
            </div>
        </div>
        <x-sidebar/>
    </div>

@endsection
