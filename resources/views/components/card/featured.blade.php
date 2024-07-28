@props(['src', 'address'])

<div>
    <a href="{{ route('article') }}"
       class="block rounded-lg p-4 max-md:max-w-md shadow-sm shadow-indigo-100 group hover:shadow-lg hover:shadow-indigo-200 transition duration-300 ease-in-out relative">
        <x-img :src="$src" :alt="$address"
               class="rounded-md transition duration-300 ease-in-out group-hover:brightness-50"/>

        <div class="mt-2 relative h-12 text-center overflow-hidden">
            <dl>
                <div>
                    <dt class="sr-only">{{ __('Address') }}</dt>

                    <dd class="font-medium dark:text-white/75">{{ $address }}</dd>
                </div>
            </dl>
        </div>

        <div
            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">
            <x-read-more-button link="#"/>
        </div>
    </a>
</div>

