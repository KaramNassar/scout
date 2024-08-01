@props(['troops'])

@foreach($troops as $troops)
    <x-svg.marker x="{{ $troops->x }}" y="{{ $troops->y }}"
                  @click="showMapModal = true; modalTitle = '{{ $troops->name }}'; modalSlug = '{{ $troops->slug }}', modalImage = '{{ $troops->getFeaturedImage() }}'"
                  class="cursor-pointer"/>
@endforeach
