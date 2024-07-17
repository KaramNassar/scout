@props(['src', 'title'])

<a href="#"
   class="relative grid w-full max-w-[28rem] flex-col items-end overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700 transition-transform duration-500 hover:rotate-6 hover:shadow-lg hover:z-10">
    <div>
        <div class="absolute inset-0 w-full bg-gradient-to-t from-black/80 via-black/40 to-transparent z-10"></div>
        <x-img :src="$src" :gallery="true" alt="photo gallery image 01" class="h-auto bg-gray-200 rounded aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"/>

    </div>
    <div class="absolute p-6 px-2 md:px-3 z-50">
        <h2 class="mb-6 block font-sans text-2xl font-medium leading-[1.5] tracking-normal text-white antialiased">
            {{ $title }}
        </h2>
    </div>
</a>
