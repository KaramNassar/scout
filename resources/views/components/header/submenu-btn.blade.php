@props(['title'])
<button @click="subMenuIsOpen = ! subMenuIsOpen" :aria-expanded="subMenuIsOpen"
        class="inline-flex justify-center items-center text-gray-700 dark:text-gray-200 rounded-full focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 dark:focus-visible:outline-blue-600"
        aria-controls="userMenu">
    <span
        class="font-medium text-slate-700 underline-offset-2 hover:text-blue-400 focus:outline-none focus:underline dark:text-slate-300 dark:hover:text-blue-300">
        {{ __($title) }}
    </span>
    <svg class="mt-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
         fill="currentColor">
        <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"/>
    </svg>
</button>
