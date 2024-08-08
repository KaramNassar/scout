@props(['troops'])

@foreach($troops as $troop)
    <x-svg.marker x="{{ $troop->x }}" y="{{ $troop->y }}"
                  @click="showMapModal = true; modalTitle = '{{ $troop->name }}'; modalSlug = '{{ $troop->slug }}', modalImage = '{{ $troop->featuredImage?->url }}'"
                  class="cursor-pointer"/>
@endforeach
