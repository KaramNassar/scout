<div
    class="fixed bottom-0 z-50 flex flex-row md:flex-col w-full gap-1 items-center justify-center bg-white py-2 text-left font-sans opacity-100 transition-all duration-200 ease-in dark:bg-gray-800 md:top-40 md:bottom-auto md:w-auto md:bg-transparent dark:md:bg-transparent">
    <span class="text-sm font-medium ml-1 text-gray-900 dark:text-gray-100 text-center"> {{ __('share') }}</span>

    <a class="transition duration-300 ease-in-out hover:scale-110"
        target="_blank" rel="noopener"
        href="https://www.facebook.com/sharer/sharer.php?u={{ Request::fullUrl() }}"
        aria-label="Share on Facebook">
        <x-svg.facebook/>
    </a>

    <a class="transition duration-300 ease-in-out hover:scale-110"
        target="_blank" rel="noopener"
        href="https://twitter.com/intent/tweet?url={{ Request::fullUrl() }}&text="
        aria-label="Share on Twitter">
        <x-svg.x_twitter/>
    </a>

{{--    <a target="_blank" rel="noopener"--}}
{{--       href="https://www.instagram.com/sharer.php?u={{ Request::fullUrl() }}&text="--}}
{{--       aria-label="Share on Instagram">--}}
{{--        <x-svg.instagram/>--}}
{{--    </a>--}}

{{--    <a--}}
{{--        target="_blank" rel="noopener"--}}
{{--        href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::fullUrl() }}&title=&summary=&source="--}}
{{--        aria-label="Share on Linkedin">--}}
{{--        <x-svg.linkedin/>--}}
{{--    </a>--}}

    <a class="transition duration-300 ease-in-out hover:scale-110"
        target="_blank" rel="noopener" href="https://wa.me/?text={{ Request::fullUrl() }}"
        aria-label="Share on Whatsapp" draggable="false" style="">
        <x-svg.whatsapp/>
    </a>

    <a class="transition duration-300 ease-in-out hover:scale-110"
        target="_blank" rel="noopener"
        href="https://telegram.me/share/url?text=&url={{ Request::fullUrl() }}"
        aria-label="Share on Telegram" draggable="false">
        <x-svg.telegram/>
    </a>
</div>
