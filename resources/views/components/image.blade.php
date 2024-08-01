@props(['model'])

@if ($model->media()->hasCuration('thumbnail'))
    <x-curator-curation :media="$model->media()" curation="thumbnail" {{ $attributes }}/>
@else
    <x-curator-glider
        {{ $attributes->class(['object-cover']) }}
        :media="$model->media()"
        :width="600"
        :height="450"
        format="webp"
    />
@endif
