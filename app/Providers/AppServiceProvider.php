<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('settings', Schema::hasTable('general_settings') ? GeneralSetting::first() : new GeneralSetting());
        Carbon::setLocale(config('app.locale'));
    }
}
