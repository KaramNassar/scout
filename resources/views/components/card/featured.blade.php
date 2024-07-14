@props(['src', 'address'])
<div>
    <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 group hover:shadow-lg hover:shadow-indigo-200 transition duration-300 ease-in-out relative">
        <img
            alt="{{ $address }}"
            class="h-56 w-full rounded-md object-cover transition duration-300 ease-in-out group-hover:brightness-50 lozad"
            data-src="{{ $src }}"
        />

        <div class="mt-2 relative h-12 overflow-hidden">
            <dl>
                <div>
                    <dt class="sr-only">{{ __('Address') }}</dt>

                    <dd class="font-medium dark:text-white/75">{{ $address }}</dd>
                </div>
            </dl>
        </div>

        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg">{{ __('Read More') }}</button>
        </div>
    </a>
</div>

