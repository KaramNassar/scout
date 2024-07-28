<div>
    <button @click="openSearch = true" class="flex items-center gap-1 py-2 justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
             stroke="currentColor" aria-hidden="true"
             class="size-3 mt-2.5 -translate-y-1/2 text-slate-700/50 dark:text-slate-300/50">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
        </svg>
        <span class="text-xs sm:text-sm text-slate-700/50 dark:text-slate-300/50">{{ __('search') }}</span>

    </button>

    <div x-show="openSearch" x-cloak @keydown.escape.window="openSearch = false"
         class="fixed inset-0 z-50 flex items-start justify-center bg-gray-800 bg-opacity-80 pt-20"
         @click.self="openSearch = false"
         x-init="$watch('openSearch', value => value === true && $nextTick(() => $refs.searchInput.focus()))">
        <div class="relative w-full max-w-3xl mx-4 p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg">
            <button @click="openSearch = false" type="button"
                    class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-10 rounded-full p-2 inline-flex items-center justify-center bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-100">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div>
                <input type="text"
                       class="w-full rounded-full border border-gray-300 bg-gray-50 px-4 py-2 rtl:pr-4 rtl:pl-10 text-sm leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-main-light focus:border-main-light dark:placeholder-gray-400 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-main-dark"
                       placeholder="{{ __('search') }}"
                       wire:model.live="query"
                       @keydown.escape.window="openSearch = false"
                       @focus="openSearch = true"
                       :autofocus="{ openSearch }"
                       x-ref="searchInput">

                @if ($query)
                    <div class="w-full py-4 dark:text-white max-h-[60vh] mt-3 px-1.5 overflow-y-auto">
                        <ul class="space-y-3">
                            @forelse ($results as $result)
                                <li>
                                    <a href=""
                                       class="block p-4 bg-white dark:bg-gray-700 rounded-lg shadow dark:shadow-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600 transition">
                                        <div class="flex items-center gap-4">
                                            <img src="{{ $result->image_url }}" alt="{{ $result->title }}"
                                                 class="w-16 h-16 rounded object-cover">
                                            <div>
                                                <div
                                                    class="text-lg font-semibold dark:text-white">{{ $result->firstname }}</div>
                                                <div
                                                    class="text-gray-600 dark:text-gray-400">{{ Str::limit($result->excerpt ?? strip_tags($result->body), 100) }}</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            @empty
                                <div class="py-2 text-gray-700 dark:text-gray-300">{{ __('No results found') }}</div>
                            @endforelse
                        </ul>

                    </div>
                    @if ($results && $results->isNotEmpty())
                        <div class="mt-6 text-center">
                            <a href="{{ route('search-results') . '?query=' . $query }}"
                               class="inline-block px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300 dark:bg-blue-800 dark:hover:bg-blue-900">
                                {{ __('View All Results') }}
                            </a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
