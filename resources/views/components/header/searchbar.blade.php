<div x-data="{ open: false }"
     class="relative hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg py-2 pr-1">
    <!-- Toggle Button -->
    <button @click="open = !open" class="px-4 py-2">
        <span class="ml-5 text-slate-700/50 dark:text-slate-300/50">{{ __('search') }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
             stroke="currentColor" aria-hidden="true"
             class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-slate-700/50 dark:text-slate-300/50">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
        </svg>
    </button>

    <!-- Search Bar -->
    <div x-show="open" x-cloak @click.away="open = false" x-transition
         class="absolute end-0 top-16 flex w-full min-w-[20rem] flex-col overflow-hidden rounded-xl bg-slate-100 py-1.5 px-1.5 dark:bg-slate-800">
        <input type="text" placeholder="Search..." class="px-4 py-2 rounded-md focus:outline-none"/>
    </div>
</div>
