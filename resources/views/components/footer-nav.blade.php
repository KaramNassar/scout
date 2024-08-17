@foreach($menu->getItems() as $item)
    @if($item->children->isEmpty())
        <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'>
            <a href='{{ $item->url }}'
               class='text-slate-700 transition duration-300 ease-in-out hover:text-main-light dark:text-slate-300 dark:hover:text-main-dark'>
                {{ $item->name }}
            </a>
        </li>
    @else
        <div class="lg:mx-auto">
            <h4 class="mb-7 text-lg font-medium text-gray-900 dark:text-white">{{ $item->name }}</h4>
            <ul class="text-sm text-gray-600 transition-all duration-500 dark:text-gray-400">

                @foreach($item->children as $child)
                    <li class="mb-4">
                        <x-footer-link href="{{ $child->url }}">
                            {{ $child->name }}
                        </x-footer-link>
                    </li>
                @endforeach

            </ul>
        </div>
    @endif
@endforeach
