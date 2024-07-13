<div x-data="{ open: false}" class="relative inline-block">
    <div>
        <button @click="open = !open"
                class="inline-flex justify-center w-full rounded-md p-2 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none">
            <span>{{ ucwords(app()->getLocale()) }}</span>
        </button>
    </div>
    <div x-show="open" x-cloak @click.away="open = false" x-transition
         class="absolute end-0 mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            @foreach(config('locales') as $locale => $data)
                <a href="{{ route('locale.switch', $locale) }}"
                   class="flex gap-2 items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 w-full"
                   role="menuitem">
                    <img src="https://flagcdn.com/{{ $data['flag'] }}.svg" alt="Flag" class="h-5 w-5 mr-2">
                    {{ $data['display'] }}
                </a>
            @endforeach

        </div>
    </div>
</div>
