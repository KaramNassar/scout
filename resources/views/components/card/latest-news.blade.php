@props(['src', 'post'])

<div class="swiper-slide">
    <div
        class="bg-white shadow-md border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-600 transition-transform duration-300 hover:scale-105">
        <a href="#">
            <x-img :src="$src" alt="fds"/>

        </a>
        <div class="p-5">
            <time datetime="2022-10-10" class="block text-xs dark:text-white/90"> {{ __('10th Oct 2022') }}</time>
            <a href="#">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">{{ $post['title'] }}</h5>
            </a>
            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">{{ $post['excerpt'] }}</p>
            <a href="#"
               class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{ __('Read more') }}
                <span class="mx-2">
                     @if(app()->getLocale() === 'ar')
                         &larr;
                     @else
                         &rarr;
                     @endif
                </span>
            </a>
        </div>
    </div>
</div>
