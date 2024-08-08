@props(['model'])

@if ($model->featuredImage?->hasCuration('thumbnail'))
    <x-curator-curation :media="$model->featuredImage" curation="thumbnail" {{ $attributes }}/>
@else
    <x-curator-glider
        {{ $attributes->class(['object-cover']) }}
        :media="$model->featuredImage"
        :width="600"
        :height="450"
        format="webp"
    />
@endif
