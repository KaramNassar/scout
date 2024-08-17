@props(['post'])

<a href="{{ route('posts.show', $post->slug) }}"
   class="relative grid w-[310px] mx-auto flex-col items-end overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700 transition-transform duration-500 group hover:z-10 hover:shadow-lg">
    <div>
        <div class="absolute inset-0 z-10 w-full bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <x-image :model="$post" loading="lazy"
                 class="h-auto rounded bg-gray-200 aspect-[5/6] transition-transform duration-500 group-hover:scale-110 lg:aspect-[2/3] xl:aspect-[3/4]"/>
    </div>
    <div class="absolute z-50 p-6 px-2 md:px-3">
        <h5 class="block font-sans text-xl font-medium text-gray-200 line-clamp-1">
            {{ $post->title }}
        </h5>
    </div>
</a>
