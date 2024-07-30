@props(['troops'])
<div class="w-full max-w-6xl mx-auto px-4 md:px-6 pb-16">
    <div class="flex flex-col justify-center divide-y divide-slate-200">

        <div class="w-full max-w-5xl mx-auto">
            @forelse($troops as $troop)
                <x-card.timeline :troop="$troop"/>
            @empty
                <p>No Troops</p>
            @endforelse

        </div>
    </div>
</div>
