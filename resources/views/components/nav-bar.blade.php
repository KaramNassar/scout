<ul
    class='max-lg:fixed max-lg:top-0 max-lg:left-0 rtl:max-lg:right-0 z-50 max-lg:h-full max-lg:w-2/3 max-lg:overflow-auto max-lg:bg-white dark:bg-gray-800 max-lg:p-4 max-lg:shadow-md max-lg:space-y-3 max-lg:min-w-[300px] lg:flex lg:gap-x-8'>

    @foreach($menu->getItems() as $item)
        @if($item->children->isEmpty())
            <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'>
                <a href='{{ $item->url }}'
                   class='text-slate-700 transition duration-300 ease-in-out hover:text-main-light dark:text-slate-300 dark:hover:text-main-dark'>
                    {{ __($item->name) }}
                </a>
            </li>
        @else
            <x-header.submenu :title="$item->name">
                @foreach($item->children as $child)
                    <li class='border-b py-3'>
                        <a href='{{ $child->url }}'
                           class='block text-slate-700 transition duration-300 ease-in-out hover:text-main-light dark:text-slate-300 dark:hover:text-main-dark'>
                            {{ $child->name }}
                        </a>
                    </li>

                @endforeach
            </x-header.submenu>
        @endif
    @endforeach
</ul>
