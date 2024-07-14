@props(['heading'])
<section class="text-center mt-32" data-aos="fade-right">
    <h2 class="text-4xl font-bold dark:text-white/85 mb-20">{{ $heading }}</h2>

    {{ $slot }}

</section>
