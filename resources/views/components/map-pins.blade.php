@props(['troops'])

@foreach($troops as $troop)
    <x-svg.marker x="{{ $troop->x }}" y="{{ $troop->y }}"
                  @click="showMapModal = true; modalTitle = '{{ $troop->name }}'; modalSlug = '{{ $troop->slug }}', modalImage = '{{ $troop->getFeaturedImage()->url }}'"
                  class="cursor-pointer"/>
@endforeach
