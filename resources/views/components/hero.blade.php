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
                    {{ __('Syrian Syrian Scout') }}

                    <strong class="block font-extrabold text-2xl text-rose-700 dark:text-rose-500 mt-4"> Scout Slogan </strong>
                </h1>

                <p class="mt-4 max-w-xl text-gray-900 sm:text-2xl/relaxed dark:text-white">
                    {{ __('hero-description') }}
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a
                        href="{{ route('about') }}"
                        class="block rounded mx-auto sm:mx-0 bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
                    >
                        {{ __('Learn More') }}
                    </a>

                </div>
            </div>
        </div>
    </x-container>
</section>

