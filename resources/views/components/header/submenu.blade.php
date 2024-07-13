<ul x-cloak x-show="subMenuIsOpen" x-transition.opacity
    @click.outside="subMenuIsOpen = false"
    {{ $attributes->class('right-0 top-12 flex w-full min-w-[20rem] flex-col overflow-hidden rounded-xl border border-slate-300 bg-slate-100 py-1.5 dark:border-slate-700 dark:bg-slate-800') }}
>

    {{ $slot }}

</ul>
