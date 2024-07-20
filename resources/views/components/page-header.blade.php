@props(['title', 'date' => false])

<section class="sm:py-20 py-12 bg-gray-50 dark:bg-gray-700/50 mb-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 xl:max-w-7xl">
            <h1 class="sm:text-3xl sm:leading-10 text-gray-900 dark:text-gray-100 font-medium text-2xl leading-9 mt-1.5 text-center">
                {{ $title }}
            </h1>
            @if($date)
                <p class="text-gray-500 dark:text-gray-400 mt-3 text-sm">Last updated on July 08, 2023</p>
            @endif
    </div>
</section>
