@props(['model'])

@if ($model->getFeaturedImage()?->hasCuration('thumbnail'))
    <x-curator-curation :media="$model->getFeaturedImage()" curation="thumbnail" {{ $attributes }}/>
@else
    <x-curator-glider
        {{ $attributes->class(['object-cover']) }}
        :media="$model->getFeaturedImage()"
        :width="600"
        :height="450"
        format="webp"
    />
@endif
