<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PostsChart extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            BaseWidget\Stat::make('Published Post', Post::userPublishedPosts()->count()),
            BaseWidget\Stat::make('Pending Post', Post::pending()->count()),
            BaseWidget\Stat::make('Draft Post', Post::draft()->count()),
        ];
    }
}
