@props(['name', 'created_at', 'link', 'city', 'img', 'alt'])

<div class="relative pl-8 sm:pl-32 py-16 group">
    <div class="font-caveat font-medium text-2xl text-indigo-500 mb-1 sm:mb-0">{{ $name }}</div>
    <div
        class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
        <time
            class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
            {{ $created_at }}
        </time>
        <div class="text-xl font-bold text-slate-900 dark:text-white/60">Was founded in {{ $city }}</div>
    </div>
    <div class="text-slate-500">
        <a href="{{ $link }}" class="block">
            <x-img :src="$img" :alt="$alt" class="rounded-bl-3xl rounded-tr-3xl sm:h-64 lg:h-72"/>

            <div class="mt-4 flex items-center justify-center">
                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 group-hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span
                        class="relative px-5 py-4 space-x-6 rtl:space-x-reverse transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <span>{{ __('Find out more') }}</span>
                        <span
                            class="relative shrink-0 rounded-full border border-current bg-white px-3 py-2.5 text-indigo-600 group-active:text-indigo-500 transform transition-transform duration-300 ease-in-out group-hover:translate-x-1"
                        >
                             @if(app()->getLocale() === 'ar')
                                 &larr;
                             @else
                                 &rarr;
                             @endif
                        </span>
                    </span>
                </button>

            </div>

        </a>
    </div>
</div>
