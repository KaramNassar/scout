<div x-data="{ open: false}" class="relative inline-block">
    <div>
        <button @click="open = !open"
                class="inline-flex justify-center w-full rounded-md p-2 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none">
            <span>{{ config('locales')[app()->getLocale()]['display'] }}</span>
        </button>
    </div>
    <div x-show="open" x-cloak @click.away="open = false" x-transition
         class="absolute end-0 mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if($localeCode !== app()->getLocale())
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, $localeCode, [], true) }}"
                       class="flex gap-2 items-center flex-row-reverse  px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 w-full"
                       role="menuitem">
                        <img src="https://flagcdn.com/{{ $properties['regional'] }}.svg" alt="Flag" class="h-5 w-5">
                        <span class="font-medium">
                            {{ $properties['native'] }}
                        </span>
                    </a>
                @endif
            @endforeach

        </div>
    </div>
</div>
