<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class PaginationMacroServiceProvider extends ServiceProvider
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
