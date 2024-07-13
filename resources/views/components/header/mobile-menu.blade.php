<div>
    <x-header.mobile-menu-btn/>


    <ul x-cloak x-show="mobileMenuIsOpen"
        x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full"
        class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col rounded-b-xl border-b border-slate-300 bg-slate-100 px-8 pb-6 pt-10 dark:border-slate-700 dark:bg-slate-800 lg:hidden">

        <x-header.submenu-navlink class="flex-col items-start my-3">
            <x-header.submenu-btn title="Who we are"/>

            <x-header.submenu>
                <x-header.submenu-link href="/history">History of the SSC Movement</x-header.submenu-link>
                <x-header.submenu-link href="/about">About SSC</x-header.submenu-link>
                <x-header.submenu-link href="">SSC Anthem</x-header.submenu-link>
                <x-header.submenu-link href="">SSC Troops</x-header.submenu-link>
            </x-header.submenu>
        </x-header.submenu-navlink>

        <x-header.submenu-navlink class="flex-col items-start my-3">
            <x-header.submenu-btn title="News and Activities"/>

            <x-header.submenu>
                <x-header.submenu-link href="/about">SSC Meetings</x-header.submenu-link>
                <x-header.submenu-link href="">SSC Decisions</x-header.submenu-link>
                <x-header.submenu-link href="">SSC Camps</x-header.submenu-link>
            </x-header.submenu>
        </x-header.submenu-navlink>

        <x-header.navlink href="/contact">
            Contact us
        </x-header.navlink>

    </ul>
</div>
