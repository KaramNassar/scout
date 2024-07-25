@props(['link'])
<a href="{{ $link }}"
   class="flex items-center justify-center gap-2 border border-main-light dark:border-main-dark rounded-full py-3 px-6 w-fit mx-auto sm:mx-0 text-sm text-main-light dark:text-main-dark font-semibold transition-all duration-500 hover:bg-secondary-light/10 dark:hover:bg-secondary-dark/20">
    {{ $slot }}
</a>
