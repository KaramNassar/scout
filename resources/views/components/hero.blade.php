<section
    class="relative"
>
    <img
        data-src="{{ asset('storage/hero-bg.jpg') }}"
        alt="Background"
        class="absolute inset-0 w-full h-full object-cover lozad"
    />
    <div
        class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l dark:bg-gray-900/75 dark:sm:bg-transparent dark:sm:from-gray-900/75 dark:sm:to-gray-900/25"
    ></div>

    <x-container>
        <div
            class="relative py-32 lg:flex lg:h-screen lg:items-center"
        >
            <div class="max-w-2xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl rtl:text-2xl font-extrabold sm:text-6xl rtl:sm:text-5xl text-gray-900 dark:text-white">
                    {{ __('Syrian Syriac Scout') }}
                </h1>

                <p class="mt-4 max-w-xl text-gray-900 sm:text-2xl/relaxed dark:text-white">
                    {{ __('hero-description') }}
                </p>

            </div>
        </div>
    </x-container>
</section>
