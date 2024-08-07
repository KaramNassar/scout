@props(['troop'])
<div class="relative pb-16 pl-8 group space-y-2 sm:pl-32">
    <div
        class="mb-1 text-lg font-medium font-caveat text-main-light dark:text-main-dark sm:mb-0 sm:text-2xl">{{ $troop->name }}</div>
    <div
        class="group-last:before:hidden before:absolute after:absolute before:left-2 after:left-2 mb-1 after:box-content flex after:h-2 before:h-full after:w-2 before:-translate-x-1/2 after:-translate-x-1/2 before:translate-y-3 flex-col items-start before:self-start after:rounded-full after:border-4 after:border-slate-50 before:bg-slate-300 after:bg-indigo-600 before:px-px after:translate-y-1.5 sm:before:ml-[6.5rem] sm:after:ml-[6.5rem] sm:before:left-0 sm:after:left-0 sm:flex-row">
        <time
            class="-left-1 mb-3 inline-flex h-6 w-24 items-center justify-center rounded-full bg-emerald-100 text-xs font-semibold text-emerald-600 translate-y-0.5 sm:absolute sm:mb-0">
            {{ $troop->created_date }}
        </time>
    </div>
    <div class="text-slate-500">
        <a href="{{ route('troops.show', $troop->slug) }}" class="block">
            <x-image :model="$troop"
                     class="rounded-tr-3xl rounded-bl-3xl transition duration-300 ease-in-out hover:scale-105"/>
        </a>

            <div class="mt-4 flex items-center justify-center">
                <a href="{{ route('troops.show', $troop->slug) }}"
                    class="relative mb-2 inline-flex overflow-hidden rounded-lg bg-gradient-to-br from-cyan-500 to-blue-500 text-sm text-gray-900 p-0.5 me-2 font-sm hover:from-cyan-500 hover:to-blue-500 hover:text-white focus:outline-none focus:ring-4 focus:ring-cyan-200 dark:text-white dark:focus:ring-cyan-800">
                    <span
                        class="flex items-center rounded-md bg-white px-5 py-2 transition-all duration-300 ease-in space-x-6 rtl:space-x-reverse hover:bg-opacity-0 dark:bg-gray-900 dark:hover:bg-opacity-0">
                        <span>{{ __('Find out more') }}</span>
                        <span
                            class="rtl:rotate-180 rounded-full border border-cyan-800 bg-white px-3 py-2 text-indigo-600 center"
                        >
                                     &rarr;
                        </span>
                    </span>
                </a>
            </div>
    </div>
</div>
