@props(['images'])
<div id="lightgallery">
    <x-swiper>
        @foreach($images as $image)
            <div class="swiper-slide">
                <a class="item" href="{{ $image->url }}">
                    <x-curator-glider :media="$image"
                                      class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                      quality="75"
                                      format="webp"
                                      loading="lazy"/>
                </a>
            </div>
        @endforeach
    </x-swiper>
</div>
