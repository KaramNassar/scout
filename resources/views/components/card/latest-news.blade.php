@props(['src', 'post'])

<div class="swiper-slide">
    <div
        class="bg-white shadow-md border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-600 transition-transform duration-300 hover:scale-105">
        <a href="#">
            <x-img :src="$src" alt="fds"/>

            <div class="p-5">
                <time datetime="2022-10-10" class="block text-xs dark:text-white/90"> {{ __('10th Oct 2022') }}</time>
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">{{ $post['title'] }}</h5>
                <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">{{ $post['excerpt'] }}</p>
                <x-read-more-button/>
            </div>
        </a>
    </div>
</div>
