<div x-data="{ modalTitle: '', modalInfo: '' }">
    <div class="relative" style="direction: ltr;">
        <x-dynamic-component :component="'svg.syria-map-' . config('app.locale')" :pins="$pins"/>
    </div>

    <div x-show="showMapModal" @click.away="showMapModal = false" x-cloak @keydown.escape.window="showMapModal = false"
         @click.self="showMapModal = false"
         class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-75 z-[1000]" x-transition>
        <div
            class="rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-600 dark:bg-gray-800">
            <x-img :src="asset('storage/images/1.jpg')" alt="fds"/>

            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    x-text="modalTitle"></h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400" x-text="modalInfo"></p>
                <div class="flex justify-between">
                    <a href="#">
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
