@props(['heading'])
<section class="text-center mt-32" data-aos="fade-right">
    <h2 class="text-4xl font-bold dark:text-white/85">{{ $heading }}</h2>

    <div class="grid md:grid-cols-3 gap-6 max-md:max-w-md mx-auto mt-10">
        <x-card.featured :src="asset('storage/images/1.jpg')" address="National Scout Organizations"></x-card.featured>
        <x-card.featured :src="asset('storage/images/2.jpg')" address="EU Youth Empowerment Fund through the Global Youth"></x-card.featured>
        <x-card.featured :src="asset('storage/images/3.jpg')" address="World Scout Movement"></x-card.featured>
        <x-card.featured :src="asset('storage/images/4.jpg')" address="World Organization"></x-card.featured>
        <x-card.featured :src="asset('storage/images/5.jpg')" address="The 2023 World Scouting Review"></x-card.featured>
        <x-card.featured :src="asset('storage/images/6.jpg')" address="World Scout Leaders to Convene in World Scout Leaders to Convene in World Scout Leaders to Convene in  World Scout Leaders to Convene in  Cairo for Momentous 43rd World Scout Conference"></x-card.featured>
    </div>
</section>
