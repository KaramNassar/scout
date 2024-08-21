@props(['troop'])

<div class="swiper-slide">
	<article
			class="relative text-center max-w-96 mx-auto overflow-hidden rounded-lg pb-0 shadow transition h-[400px] hover:shadow-lg dark:shadow-gray-700 md:pb-10">
		<a href="{{ route('troops.show', $troop->slug) }}">
			<x-image :model="$troop"
			         class="h-56 transition duration-300 ease-in-out hover:scale-105"/>
		</a>

		<div class="bg-white p-4 space-y-1 dark:bg-gray-900 sm:p-6">
			<time class="block text-xs text-gray-500 dark:text-gray-400">{{ $troop->created_date }}</time>
			<a href="{{ route('troops.show', $troop->slug) }}">
				<h3 class="text-lg font-medium text-gray-900 line-clamp-2 mt-0.5 dark:text-gray-100">{{ $troop->name }}</h3>
			</a>

			<a href="{{ route('troops.show', $troop->slug) }}">
				<x-read-more-link class="inset-x-0 w-auto lg:w-28 justify-center"/>
			</a>

		</div>
	</article>

</div>
