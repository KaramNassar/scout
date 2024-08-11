@props(['name', 'link'])
<a
    class="flex w-full items-center justify-between group"
    href="{{ $link }}">
    <div class="flex items-center gap-2">
        <div>
            <span class="absolute h-1 w-1 overflow-hidden p-0 m-neg-1 clip-rect-0">{{ $name }}</span>

            <x-dynamic-component :component="'svg.' . $name"/>
        </div>
        <div class="group-hover:text-main-light dark:text-gray-100 dark:group-hover:text-main-dark">
            {{ trans($name) }}
        </div>
    </div>
    <div>
        <x-svg.horizental-arrow/>
    </div>
</a>
