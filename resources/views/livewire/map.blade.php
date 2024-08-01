<div x-data="{ modalTitle: '', modalSlug: '', modalImage: '' }">
    <div class="relative" style="direction: ltr;">
        <x-dynamic-component :component="'svg.syria-map-' . config('app.locale')" :troops="$troops"/>
    </div>

    <div x-show="showMapModal"
         @click.away="showMapModal = false"
         @keydown.escape.window="showMapModal = false"
         @click.self="showMapModal = false"
         x-cloak
         class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 z-[1000] x-transition">
        <div
            class="rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-600 dark:bg-gray-800">
            <a :href="'{{ route('troops.show', '') }}/' + modalSlug">
                <x-img x-bind:src="modalImage" x-bind:alt="modalTitle" class="h-72 w-full"/>
            </a>

            <div class="p-5">
                <h5 class="mb-2 text-xl font-medium tracking-tight text-gray-900 dark:text-white mb-6"
                    x-text="modalTitle"></h5>
                <div class="flex justify-between">
                    <a :href="'{{ route('troops.show', '') }}/' + modalSlug">
                        <x-read-more-button/>
                    </a>
                    <button @click="showMapModal = false"
                            class="rounded-lg bg-red-500 px-3 py-2 text-sm font-medium text-white hover:bg-red-400 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        {{ __('Close') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
