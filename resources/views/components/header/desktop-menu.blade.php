<ul class="hidden items-center gap-4 flex-shrink-0 lg:flex">
    <x-header.submenu-navlink class="items-center">
        <x-header.submenu-btn title="Who we are"/>

        <x-header.submenu class="absolute">
            <x-header.submenu-link href="/history">{{ __('History of the SSS Movement') }}</x-header.submenu-link>
            <x-header.submenu-link href="/about">{{ __('About SSS') }}</x-header.submenu-link>
            <x-header.submenu-link href="">{{ __('SSS Anthem') }}</x-header.submenu-link>
            <x-header.submenu-link href="">{{ __('SSS Troops') }}</x-header.submenu-link>
        </x-header.submenu>
    </x-header.submenu-navlink>

    <x-header.submenu-navlink class="items-center">
        <x-header.submenu-btn title="News and Activities"/>

        <x-header.submenu class="absolute">
            <x-header.submenu-link href="/about">{{ __('SSS Meetings') }}</x-header.submenu-link>
            <x-header.submenu-link href="">{{ __('SSS Decisions') }}</x-header.submenu-link>
            <x-header.submenu-link href="">{{ __('SSS Camps') }}</x-header.submenu-link>
        </x-header.submenu>
    </x-header.submenu-navlink>

    <x-header.navlink href="/contact">
        {{ __('Contact us') }}
    </x-header.navlink>
</ul>
