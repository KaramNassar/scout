@props(['post'])

<div>
    <a href="{{ route('posts.show', $post->slug) }}"
       class="block rounded-lg p-4 max-md:max-w-md shadow-sm shadow-indigo-100 group hover:shadow-lg hover:shadow-indigo-200 transition duration-300 ease-in-out relative">
        <x-image :model="$post" loading="lazy" class="h-56 rounded-lg"/>

        <div class="mt-2 relative h-14 text-center overflow-hidden">
            <dl>
                <div>
                    <h5 class="text-gray-900 font-bold text-lg tracking-tight mb-2 dark:text-gray-200">{{ $post->title }}</h5>
                </div>
            </dl>
        </div>

        <div
            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">
            <x-read-more-button link="{{ route('posts.show', $post->slug) }}"/>
        </div>
    </a>
</div>

