<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;


class ViewPost extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = PostResource::class;

    public function getTitle(): string|Htmlable
    {
        $record = $this->getRecord();

        return $record->title;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Action::make('preview')
                ->label('Preview')
                ->requiresConfirmation()
                ->icon('heroicon-o-eye')->url(function (Post $record) {
                    return route('posts.show', $record->slug);
                }, true)
                ->disabled(function (Post $record) {
                    return $record->isNotPublished();
                }),
        ];
    }
}
