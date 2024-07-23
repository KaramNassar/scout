<ul class="hidden items-center gap-4 flex-shrink-0 lg:flex">
    <x-header.submenu-navlink class="items-center">
        <x-header.submenu-btn title="Who we are"/>

        <x-header.submenu class="absolute">
            <x-header.submenu-link href="{{ route('history-of-the-scout') }}">{{ __('History of the Movement') }}</x-header.submenu-link>
            <x-header.submenu-link href="{{ route('about') }}">{{ __('About the Scout') }}</x-header.submenu-link>
            <x-header.submenu-link href="{{ route('troops.index') }}">{{ __('Scout Troops') }}</x-header.submenu-link>
        </x-header.submenu>
    </x-header.submenu-navlink>

    <x-header.submenu-navlink class="items-center">
        <x-header.submenu-btn title="News and Activities"/>

        <x-header.submenu class="absolute">
            <x-header.submenu-link href="/all-news">{{ __('All News') }}</x-header.submenu-link>
            <x-header.submenu-link href="/about">{{ __('Scout Meetings') }}</x-header.submenu-link>
            <x-header.submenu-link href="">{{ __('Scout Decisions') }}</x-header.submenu-link>
            <x-header.submenu-link href="">{{ __('Scout Camps') }}</x-header.submenu-link>
        </x-header.submenu>
    </x-header.submenu-navlink>

    <x-header.navlink href="/contact">
        {{ __('Contact us') }}
    </x-header.navlink>
</ul>
