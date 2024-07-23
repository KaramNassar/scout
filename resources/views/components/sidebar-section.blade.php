@props(['title'])
<div class="w-full rounded-2xl bg-gray-50 p-5 dark:bg-gray-700 sm:p-8">
    <h3 class="relative border-b border-gray-300/70 dark:border-gray-500 text-2xl font-medium text-gray-900 dark:text-gray-100 pb-2.5 before:content-[''] before:bg-main-light dark:before:bg-main-dark before:w-28 before:h-[2px] rtl:before:right-0 before:-bottom-px before:absolute">
        {{ $title }}
    </h3>
    <div class="pt-6">
        {{ $slot }}
    </div>
</div>
