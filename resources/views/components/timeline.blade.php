@props(['troops'])
<div class="flex flex-col justify-center items-center px-2">

        @forelse($troops as $troop)
            <x-card.timeline :troop="$troop"/>
        @empty
            <p>{{ __('No Troops has been added yet') }}</p>
        @endforelse

</div>
