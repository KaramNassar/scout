<div x-data="{ imageLoaded: false }" class="relative overflow-hidden w-full">
    <div role="status"
         x-show="!imageLoaded"
        {{ $attributes->class(['absolute flex justify-center items-center inset-0 bg-gray-300 dark:bg-gray-500 animate-pulse']) }}>
        <x-image-placeholder/>
    </div>

    <img
        :class="{ 'opacity-100': imageLoaded, 'opacity-0': !imageLoaded }"
        @load="imageLoaded = true"
        {{ $attributes->class(['h-56 w-full object-cover lozad']) }}
    />
</div>
