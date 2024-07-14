@props(['src', 'title'])
<a href="#"
   class="relative grid w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700 transition-transform duration-500 hover:rotate-6 hover:shadow-lg hover:z-10">
    <div>
        <div class="absolute inset-0 w-full bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
        <img class="object-cover w-full h-auto bg-gray-200 rounded aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] lozad"
             alt="photo gallery image 01"
             src="{{ $src }}">
    </div>
    <div class="absolute p-6 px-2 md:px-3">
        <h2 class="mb-6 block font-sans text-2xl font-medium leading-[1.5] tracking-normal text-white antialiased">
            {{ $title }}
        </h2>
    </div>
</a>
