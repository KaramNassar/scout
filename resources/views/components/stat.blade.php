@props(['color', 'title', 'description'])
<div class="flex flex-col items-center justify-between m-auto lg:max-w-xs text-gray-900 dark:text-white/75">
    <div class="flex items-center justify-center w-36 h-144">
        <article class="{{ $color }}">

            {{ $slot }}

        </article>

    </div>
    <div class="font-heading font-semibold pb-3 text-4xl text-center">
        {{ $title }}
    </div>
    <div class="font-heading font-semibold text-center text-gray-dark">
        {{ $description }}
    </div>
</div>
