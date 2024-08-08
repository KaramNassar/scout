@props(['post'])

<div class="swiper-slide relative">
    <div
        class="bg-white shadow-md border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-600 h-[468px]">
        <a href="{{ route('posts.show', $post->slug) }}">
            <x-image :model="$post" loading="lazy" class="h-56 rounded-t-lg transition duration-300 ease-in-out hover:scale-105"/>

            <div class="p-5 space-y-4">
                <time datetime="2022-10-10" class="block font-normal text-xs text-gray-700 dark:text-gray-400"> {{ __($post->published_at) }}</time>
                <h5 class="text-gray-900 line-clamp-1 font-bold text-xl tracking-tight mb-2 dark:text-gray-200">{{ $post->title }}</h5>
                <p class="font-normal line-clamp-3 text-gray-700 mb-3 dark:text-gray-400">{!! $post->body !!}</p>
                <x-read-more-button class="absolute bottom-4 inset-x-[100px]"/>
            </div>
        </a>
    </div>
</div>
