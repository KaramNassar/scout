@props(['heading'])
<section class="mt-32" data-aos="fade-right">
    <h2 class="text-4xl font-bold dark:text-white/85 mb-20 text-center">{{ $heading }}</h2>

    {{ $slot }}

</section>
