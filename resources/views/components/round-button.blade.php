@props(['link'])
<a href="{{ $link }}"
    {{ $attributes->class(['flex items-center justify-center gap-2 border border-main-light dark:border-main-dark rounded-full py-2 px-6 w-fit sm:mx-0 text-sm text-main-light dark:text-main-dark font-semibold transition-all duration-500 hover:bg-secondary-light/10 dark:hover:bg-secondary-dark/20']) }}>
    {{ $slot }}
</a>
