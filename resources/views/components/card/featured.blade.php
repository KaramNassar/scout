@props(['post'])

<div>
    <a href="{{ route('posts.show', $post->slug) }}"
       class="relative block w-[310px] mx-auto rounded-lg p-4 shadow-sm shadow-indigo-100 dark:shadow-gray-600 transition duration-300 ease-in-out group hover:shadow-lg hover:shadow-indigo-200">
        <x-image :model="$post" loading="lazy" class="h-56 rounded-lg transition duration-300 ease-in-out group-hover:brightness-50"/>

        <div class="relative mt-2 h-14 overflow-hidden text-center">
            <dl>
                <div>
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-gray-200">{{ $post->title }}</h5>
                </div>
            </dl>
        </div>

        <div
            class="absolute inset-0 flex items-center justify-center opacity-0 transition duration-300 ease-in-out group-hover:opacity-100">
            <x-read-more-button link="{{ route('posts.show', $post->slug) }}"/>
        </div>
    </a>
</div>

