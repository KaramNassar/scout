<div class="swiper multiple-slide-carousel swiper-container relative text-center">
    <div class="swiper-wrapper mb-16">
        {{ $slot }}
    </div>
    <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
        <button id="slider-button-left"
                class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 dark:border-gray-300 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-purple dark:hover:bg-pink-500 !-translate-x-16 z-10"
                data-carousel-prev>
            <svg class="h-5 w-5 text-indigo-600 dark:text-gray-300 group-hover:text-white"
                 xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                      stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <button id="slider-button-right"
                class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 dark:border-gray-300 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-purple dark:hover:bg-pink-500 !translate-x-16 z-10"
                data-carousel-next>
            <svg class="h-5 w-5 text-indigo-600 dark:text-gray-300 group-hover:text-white"
                 xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                      stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</div>
