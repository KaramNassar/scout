@props(['troop'])

<div class="swiper-slide">
    <div
        class="bg-white shadow-md border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-600">
        <a href="{{ route('troops.show', $troop->slug) }}">
                <x-image :model="$troop" loading="lazy" class="h-56"/>

            <div class="p-5">
                <time datetime="2022-10-10" class="block text-xs dark:text-white/90"> {{ $troop->created_date }}</time>
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight my-4 dark:text-white">{{ $troop->name }}</h5>
                <x-read-more-button/>
            </div>
        </a>
    </div>
</div>
