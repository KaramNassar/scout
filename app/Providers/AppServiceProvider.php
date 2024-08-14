<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Troop;
use App\Policies\ActivityPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\ExceptionPolicy;
use App\Policies\MailLogPolicy;
use App\Policies\MediaPolicy;
use App\Policies\PostPolicy;
use App\Policies\TagPolicy;
use App\Policies\TranslationPolicy;
use App\Policies\TroopPolicy;
use Awcodes\Curator\Models\Media;
use BezhanSalleh\FilamentExceptions\Models\Exception;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;
use Spatie\Activitylog\Models\Activity;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
use Spatie\Health\Checks\Checks\BackupsCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Facades\Health;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;
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
        Gate::policy(Category::class, CategoryPolicy::class);
        Gate::policy(Tag::class, TagPolicy::class);
        Gate::policy(Troop::class, TroopPolicy::class);
        Gate::policy(Post::class, PostPolicy::class);
        Gate::policy(Media::class, MediaPolicy::class);

        View::share('settings', GeneralSetting::first());
        Carbon::setLocale(config('app.locale'));

        Health::checks([
            OptimizedAppCheck::new(),
            DebugModeCheck::new(),
            EnvironmentCheck::new(),
            BackupsCheck::new(),
            CpuLoadCheck::new(),
            DatabaseCheck::new(),
            DatabaseConnectionCountCheck::new(),
            ScheduleCheck::new(),
            SecurityAdvisoriesCheck::new(),
            UsedDiskSpaceCheck::new(),

        ]);

        $settings = GeneralSetting::first(['email_settings', 'email_from_address', 'email_from_name']);

        $mailSettings = $settings->email_settings;

        Config::set('mail.mailers.smtp', [
            'transport'  => $mailSettings['default_email_provider'],
            'host'       => $mailSettings['smtp_host'],
            'port'       => $mailSettings['smtp_port'],
            'encryption' => $mailSettings['smtp_encryption'],
            'timeout'    => $mailSettings['smtp_timeout'],
            'username'   => $mailSettings['smtp_username'],
            'password'   => $mailSettings['smtp_password'],
        ]);

        Config::set('mail.from.address', $settings->email_from_address);
        Config::set('mail.from.name', $settings->email_from_name);

        Collection::macro('simplePaginate', function ($perPage = 5, $page = null, $pageName = 'page') {
            $page = $page ?: Paginator::resolveCurrentPage($pageName);

            $items = $this->slice(($page - 1) * $perPage);

            return new Paginator(
                $items->take($perPage + 1),
                $perPage,
                $page,
                [
                    'path'     => Paginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }
}
