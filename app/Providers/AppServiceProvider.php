<?php

namespace App\Providers;

use App\Policies\ActivityPolicy;
use App\Policies\ExceptionPolicy;
use App\Policies\MailLogPolicy;
use App\Policies\TranslationPolicy;
use BezhanSalleh\FilamentExceptions\Models\Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity;
use Tapp\FilamentMailLog\Models\MailLog;
use TomatoPHP\FilamentTranslations\Models\Translation;

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
        Gate::policy(Exception::class, ExceptionPolicy::class);
        Gate::policy(Activity::class, ActivityPolicy::class);
        Gate::policy(MailLog::class, MailLogPolicy::class);
        Gate::policy(Translation::class, TranslationPolicy::class);

    }
}
