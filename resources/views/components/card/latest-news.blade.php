@props(['post'])

<article
    class="relative overflow-hidden rounded-lg pb-0 mx-auto shadow w-[310px] transition h-[468px] hover:shadow-lg dark:shadow-gray-700 md:pb-10">
    <a href="{{ route('posts.show', $post->slug) }}">
        <x-image :model="$post"
                 class="h-56 transition duration-300 ease-in-out hover:scale-105"/>
    </a>

    <div class="p-4 space-y-1 sm:p-6">
        <time class="block text-xs text-gray-500 dark:text-gray-400">{{ $post->publishedAt() }}</time>
        <div class="flex flex-wrap gap-1">
            @foreach($post->tags as $tag)
                <a href="{{ route('tags.show', $tag->slug) }}">
                    <x-tag-span>
                        {{ $tag->name }}
                    </x-tag-span>
                </a>

            @endforeach
        </div>
        <a href="{{ route('posts.show', $post->slug) }}">
            <h3 class="text-lg font-medium text-gray-900 line-clamp-2 mt-0.5 dark:text-gray-100">{{ $post->title }}</h3>
        </a>

        <p class="mt-2 text-gray-500 line-clamp-2 text-sm/relaxed dark:text-gray-400">
            {!! strip_tags($post->body) !!}
        </p>

        <a href="{{ route('posts.show', $post->slug) }}">
            <x-read-more-link class="inset-x-auto"/>
        </a>

    </div>
</article>
