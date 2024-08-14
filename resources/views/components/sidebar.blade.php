<div
    class="mx-auto w-full px-4 space-y-6 sm:mt-16 sm:px-6 md:mt-12 md:max-w-3xl md:px-8 lg:col-span-1 lg:mt-0 lg:max-w-none lg:px-0">

    <x-sidebar-section :title="__('search')">
        <form action="{{ route('search-results') }}" method="GET">
            <div class="relative rtl:text-right">
                <input
                    type="text"
                    name="query"
                    value="{{ request('query') }}"
                    placeholder="{{ __('search in website') }}"
                    class="w-full rounded-full border border-gray-300 bg-gray-100 px-4 py-2 rtl:pr-4 rtl:pl-10 text-sm leading-5 text-gray-900 placeholder-gray-500 focus:ring-main-light focus:border-main-light focus:outline-none focus:ring-2 dark:placeholder-gray-400 dark:bg-gray-600 dark:text-gray-100 dark:focus:ring-main-dark">
                <span
                    class="absolute top-1/2 right-2 rtl:right-auto rtl:left-2 -translate-y-1/2 transform text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                    </svg>
                </span>
            </div>

            <x-filter-select name="troop" :models="$troops"/>
            <x-filter-select name="category" :models="$categories"/>
            <x-filter-select-mutiple name="tags" :models="$tags"/>
            {{--            <x-date-range/>--}}

            <div class="flex justify-start items-center gap-2 mt-4">
                <button type="submit"
                        class="rounded-full border px-6 py-2 text-sm font-semibold transition-all duration-500 border-main-light text-main-light hover:bg-secondary-light/10 dark:border-main-dark dark:text-main-dark dark:hover:bg-secondary-dark/20">
                    {{ __('search') }}
                </button>
                <x-round-button :link="url()->current()">
                    {{ __('Reset Filters') }}
                </x-round-button>
            </div>
        </form>

    </x-sidebar-section>

    <x-sidebar-section :title="__('Featured')">
        <div class="space-y-6">
            @foreach($featuredPosts as $featuredPost)
                <article class="flex gap-4">
                    <a
                        href="{{ route('posts.show', $featuredPost->slug) }}">
                        <x-image :model="$featuredPost" class="h-20 w-24 rounded-lg"/>
                    </a>
                    <div class="w-2/3">
                        <div>
                            <a class="text-sm font-bold text-gray-600 transition duration-300 ease-in-out hover:underline dark:text-gray-200"
                               href="{{ route('posts.show', $featuredPost->slug) }}">
                                {{ $featuredPost->title }}
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </x-sidebar-section>


    <x-sidebar-section :title="__('Follow us')">
        <div class="overflow-hidden">
            @foreach($settings->social_network as $name => $link)
                <x-social-link :name="$name" :link="$link"/>
                <hr class="w-full border-t border-dashed border-gray-300/70 ml-13 my-2.5 dark:border-gray-300/30">
            @endforeach
        </div>
    </x-sidebar-section>
</div>
