<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\ServiceProvider;

class FilamentNavigationsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::registerNavigationGroups([
            'User Management'    => NavigationGroup::make('User Management'),
            'Content Management' => NavigationGroup::make('Content Management'),
            'Settings'           => NavigationGroup::make(fn() => __('Settings')),
            'Translations'       => NavigationGroup::make(fn() => __('Translations')),
            'Logs'               => NavigationGroup::make(fn() => __('Logs')),
        ]);
    }
}
