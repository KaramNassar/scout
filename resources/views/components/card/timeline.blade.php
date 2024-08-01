@props(['troop'])
<div class="relative pl-8 sm:pl-32 pb-16 group space-y-2">
    <div
        class="font-caveat font-medium text-lg sm:text-2xl text-main-light dark:text-main-dark mb-1 sm:mb-0">{{ $troop->name }}</div>
    <div
        class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
        <time
            class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold w-24 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
            {{ $troop->created_date }}
        </time>
    </div>
    <div class="text-slate-500">
        <a href="{{ route('troops.show', $troop->slug) }}" class="block">
            <x-image :model="$troop"
                     class="rounded-bl-3xl rounded-tr-3xl transition duration-300 ease-in-out hover:scale-105"/>

            <div class="mt-4 flex items-center justify-center">
                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 hover:from-cyan-500 hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span
                        class="relative px-5 py-4 space-x-6 rtl:space-x-reverse transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md hover:bg-opacity-0">
                        <span>{{ __('Find out more') }}</span>
                        <span
                            class="relative shrink-0 rounded-full border border-current rtl:rotate-180 bg-white px-3 py-2.5 rtl:py-1 text-indigo-600 active:text-indigo-500 transform transition-transform duration-300 ease-in-out hover:translate-x-1"
                        >
                                 &rarr;
                        </span>
                    </span>
                </button>
            </div>
        </a>
    </div>
</div>
