@props(['model'])

<div x-data="{ imageLoaded: false }" class="relative">
    <div role="status"
         x-show="!imageLoaded"
        {{ $attributes->class(['flex justify-center items-center bg-gray-300 dark:bg-gray-500']) }}>
        <x-image-placeholder/>
    </div>

    @if ($model->featuredImage?->hasCuration('thumbnail'))
        <x-curator-curation
            :media="$model->featuredImage"
            curation="thumbnail"
            {{ $attributes }}
            x-init="imageLoaded = true"/>
    @else
        <x-curator-glider
            {{ $attributes->class(['object-cover']) }}
            :media="$model->featuredImage"
            :width="600"
            :height="450"
            format="webp"
            x-init="imageLoaded = true"
        />
    @endif

</div>
