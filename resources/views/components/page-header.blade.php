@props(['title', 'date' => false])

<section class="sm:py-20 py-12 bg-gray-50 dark:bg-gray-700/50 mb-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 xl:max-w-7xl text-center">
            <h1 class="sm:text-3xl sm:leading-10 text-gray-900 dark:text-gray-100 font-medium text-2xl leading-9 mt-1.5">
                {!! $title !!}
            </h1>
        @if($date)
            <time class="text-gray-500 dark:text-gray-400 mt-3 text-sm">
                {!! '<strong>' . __('published_at') . ':</strong> ' . $date !!}
            </time>
        @endif
    </div>
</section>
