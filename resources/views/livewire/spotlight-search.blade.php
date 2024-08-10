<div>
    <button @click="openSearch = true" class="flex items-center justify-center gap-1 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
             stroke="currentColor" aria-hidden="true"
             class="-translate-y-1/2 text-slate-700/50 size-3 mt-2.5 dark:text-slate-300/50">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
        </svg>
        <span class="text-xs text-slate-700/50 dark:text-slate-300/50 sm:text-sm">{{ __('search') }}</span>

    </button>

    <div x-show="openSearch" x-cloak @keydown.escape.window="openSearch = false"
         class="fixed inset-0 z-50 flex items-start justify-center bg-gray-800 bg-opacity-80 pt-20"
         @click.self="openSearch = false"
         x-init="$watch('openSearch', value => value === true && $nextTick(() => $refs.searchInput.focus()))">
        <div class="relative mx-4 w-full max-w-3xl rounded-lg bg-gray-100 p-6 shadow-lg dark:bg-gray-800">
            <button @click="openSearch = false" type="button"
                    class="absolute top-0 left-1/2 inline-flex -translate-x-1/2 -translate-y-10 items-center justify-center rounded-full bg-gray-100 p-2 text-gray-700 dark:bg-gray-700 dark:text-gray-100">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div>
                <input type="text"
                       class="w-full rounded-full border border-gray-300 bg-gray-50 px-4 py-2 rtl:pr-4 rtl:pl-10 text-sm leading-5 text-gray-900 placeholder-gray-500 focus:ring-main-light focus:border-main-light focus:outline-none focus:ring-2 dark:placeholder-gray-400 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-main-dark"
                       placeholder="{{ __('search') }}"
                       wire:model.debounce.600ms.live="query"
                       @keydown.escape.window="openSearch = false"
                       @focus="openSearch = true"
                       :autofocus="{ openSearch }"
                       x-ref="searchInput">

                @if ($query)
                    <div class="mt-3 w-full overflow-y-auto py-4 max-h-[60vh] px-1.5 dark:text-white">
                        <ul class="space-y-3">
                            @foreach ($results['troops'] as $troop)
                                <li>
                                    <a href="{{ route('troops.show', $troop->slug) }}"
                                       class="block rounded-lg bg-white p-4 shadow transition hover:bg-gray-100 dark:bg-gray-700 dark:shadow-gray-300 dark:hover:bg-gray-600">
                                        <div class="flex gap-4">
                                            <x-image :model="$troop"
                                                     loading="lazy"
                                                     class="h-24 w-24 min-w-24 rounded"/>
                                            <div>
                                                <div
                                                    class="text-md font-semibold dark:text-white">{{ $troop->name }}</div>
                                                <div
                                                    class="text-gray-600 text-sm line-clamp-2 dark:text-gray-400">{{ strip_tags($troop->description)  }}</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                            @foreach ($results['posts'] as $post)
                                <li>
                                    <a href="{{ route('posts.show', $post->slug) }}"
                                       class="block rounded-lg bg-white p-4 shadow transition hover:bg-gray-100 dark:bg-gray-700 dark:shadow-gray-300 dark:hover:bg-gray-600">
                                        <div class="flex gap-4">
                                            <x-image :model="$post"
                                                     loading="lazy"
                                                     class="h-24 min-w-24 rounded"/>
                                            <div>
                                                <div
                                                    class="text-md font-semibold dark:text-white">{{ $post->title }}</div>
                                                <div
                                                    class="text-gray-600 text-sm line-clamp-2 dark:text-gray-400">{{ strip_tags($post->body)  }}</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            @endforeach
                        </ul>
                        @if($results['troops']->isEmpty() && $results['posts']->isEmpty())
                            <div class="py-2 text-gray-700 dark:text-gray-300">{{ __('Sorry, no results found!') }}</div>
                        @endif
                    </div>
                    @if (!$results['troops']->isEmpty() || !$results['posts']->isEmpty())
                        <div class="mt-6 text-center">
                            <a href="{{ route('search-results') . '?query=' . $query }}"
                               class="inline-block rounded-lg px-6 py-3 text-base font-medium text-white shadow-md transition duration-300 bg-main-light hover:bg-secondary-light dark:bg-main-dark dark:hover:bg-secondary-dark">
                                {{ __('View All Results') }}
                            </a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
