@props(['title'])
<li class='relative max-lg:border-b max-lg:px-3 max-lg:py-3 group'>
    <p
       class='block cursor-pointer text-slate-700 transition duration-300 ease-in-out hover:text-main-light dark:text-slate-300 dark:hover:text-main-dark'>
        {{ __($title) }}
        <svg class="inline-block h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor">
            <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"/>
        </svg>
    </p>
    <ul
        class='absolute z-50 block max-h-0 overflow-hidden bg-white px-6 shadow-lg transition-all duration-500 space-y-2 min-w-[250px] group-hover:max-h-[700px] group-hover:pt-6 group-hover:pb-4 group-hover:opacity-100 dark:bg-gray-700'>
        <li class='border-b py-3'>
            <a href='javascript:void(0)'
               class='block text-slate-700 transition duration-300 ease-in-out hover:text-main-light dark:text-slate-300 dark:hover:text-main-dark'>
                Furniture Store
            </a>
        </li>

    </ul>
</li>
