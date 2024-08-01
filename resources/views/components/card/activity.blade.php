@props(['src', 'title'])

<a href="#"
   class="relative grid w-full flex-col items-end overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700 transition-transform duration-500 max-w-[28rem] hover:z-10 hover:rotate-6 hover:shadow-lg">
    <div>
        <div class="absolute inset-0 z-10 w-full bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <x-img :src="$src" alt="photo gallery image 01"
               class="h-auto rounded bg-gray-200 aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"/>

    </div>
    <div class="absolute z-50 p-6 px-2 md:px-3">
        <h2 class="mb-6 block font-sans text-2xl font-medium tracking-normal text-white antialiased leading-[1.5]">
            {{ $title }}
        </h2>
    </div>
</a>
