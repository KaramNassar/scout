@props(['images'])
<div id="lightgallery">
    <x-swiper>
        @foreach($images as $image)
            <div class="swiper-slide">
                <a class="item" href="{{ $image->url }}">
                    <x-curator-glider :media="$image"
                                      class="h-auto w-full cursor-zoom-in select-none rounded bg-gray-200 object-cover aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                      quality="75"
                                      format="webp"
                                      loading="lazy"/>
                </a>
            </div>
        @endforeach
    </x-swiper>
</div>
