@props(['post'])

<article
    class="relative overflow-hidden h-[468px] pb-0 md:pb-10 rounded-lg shadow transition hover:shadow-lg dark:shadow-gray-700">
    <a href="{{ route('posts.show', $post->slug) }}">
        <x-image :model="$post"
                 class="h-56 transition duration-300 ease-in-out hover:scale-105"/>
    </a>

    <div class="bg-white p-4 dark:bg-gray-900 sm:p-6 space-y-1">
        <time datetime="2022-10-10"
              class="block text-xs text-gray-500 dark:text-gray-400">{{ $post->published_at }}</time>
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
            <h3 class="text-lg text-gray-900 line-clamp-2 mt-0.5 dark:text-white">{{ $post->title }}</h3>
        </a>

        <p class="mt-2 text-gray-500 line-clamp-2 text-sm/relaxed dark:text-gray-400">
            {!! $post->body !!}
        </p>

        <a href="{{ route('posts.show', $post->slug) }}">
            <x-read-more-link/>
        </a>

    </div>
</article>
