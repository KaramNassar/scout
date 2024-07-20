<div class="w-full max-w-6xl mx-auto px-4 md:px-6 pb-16">
    <div class="flex flex-col justify-center divide-y divide-slate-200">

        <div class="w-full max-w-5xl mx-auto">

                <x-card.timeline :name="__('The Patriarchal Mar Ephrem the Syrian Troop')"
                                 created_at="May, 1990"
                                 :link="route('troops.show', 'the_patriarchal_mar_ephrem_the_syrian_troop')"
                                 :city="__('Damascus')"
                                 :img="asset('storage/images/1.jpg')" alt="image"/>

                <x-card.timeline :name="__('Mar Ephrem the Syrian Scouts in Aleppo')"
                                 created_at="May, 1995"
                                 :link="route('troops.show', 'the_patriarchal_mar_ephrem_the_syrian_troop')"
                                 :city="__('Aleppo')"
                                 :img="asset('storage/images/2.jpg')" alt="image"/>

                <x-card.timeline :name="__('The Fourth Scout Troop in Qamishli')"
                                 created_at="May, 2000"
                                 :link="route('troops.show', 'the_patriarchal_mar_ephrem_the_syrian_troop')"
                                 :city="__('Qamishli')"
                                 :img="asset('storage/images/3.jpg')" alt="image"/>

                <x-card.timeline :name="__('The Fourth Musical Scout Troop in Al-Hasakah')"
                                 created_at="May, 2005"
                                 :link="route('troops.show', 'the_patriarchal_mar_ephrem_the_syrian_troop')"
                                 :city="__('AlHasaka')"
                                 :img="asset('storage/images/4.jpg')" alt="image"/>



        </div>
    </div>
</div>
