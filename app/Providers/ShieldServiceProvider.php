<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Troop;
use App\Policies\ActivityPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\ExceptionPolicy;
use App\Policies\MailLogPolicy;
use App\Policies\MediaPolicy;
use App\Policies\MenuPolicy;
use App\Policies\PagePolicy;
use App\Policies\PostPolicy;
use App\Policies\TagPolicy;
use App\Policies\TranslationPolicy;
use App\Policies\TroopPolicy;
use Awcodes\Curator\Models\Media;
use BezhanSalleh\FilamentExceptions\Models\Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity;
use Tapp\FilamentMailLog\Models\MailLog;
use TomatoPHP\FilamentTranslations\Models\Translation;

class ShieldServiceProvider extends ServiceProvider
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
        Gate::policy(Exception::class, ExceptionPolicy::class);
        Gate::policy(Activity::class, ActivityPolicy::class);
        Gate::policy(MailLog::class, MailLogPolicy::class);
        Gate::policy(Translation::class, TranslationPolicy::class);
        Gate::policy(Category::class, CategoryPolicy::class);
        Gate::policy(Tag::class, TagPolicy::class);
        Gate::policy(Troop::class, TroopPolicy::class);
        Gate::policy(Post::class, PostPolicy::class);
        Gate::policy(Page::class, PagePolicy::class);
        Gate::policy(Media::class, MediaPolicy::class);
        Gate::policy(Menu::class, MenuPolicy::class);
    }
}
