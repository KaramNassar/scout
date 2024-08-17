@props(['title'])
<li class='relative max-lg:border-b max-lg:px-3 max-lg:py-3 group'>
    <p
        class='block cursor-pointer text-slate-700 transition duration-300 ease-in-out hover:text-main-light dark:text-slate-300 dark:hover:text-main-dark'>
        {{ $title }}
        <x-heroicon-o-chevron-down class="inline-block h-5 w-5"/>
    </p>
    <ul
        class='absolute z-50 block max-h-0 overflow-hidden bg-white px-6 shadow-lg transition-all duration-300 space-y-2 min-w-[250px] group-hover:max-h-[700px] group-hover:pt-6 group-hover:pb-4 group-hover:opacity-100 dark:bg-gray-700'>
        {{ $slot }}
    </ul>
</li>
