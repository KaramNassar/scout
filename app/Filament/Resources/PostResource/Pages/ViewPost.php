<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
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
            ActionGroup::make([
                Actions\EditAction::make()
                ->color('primary'),
                Action::make('Publish')
                    ->requiresConfirmation()
                    ->icon('heroicon-s-arrow-up-tray')
                    ->color('success')
                    ->action(function (Post $record) {
                        $record = $this->getRecord();
                        $record->status = 'published';
                        $record->save();
                    })
                    ->visible(function (Post $record) {
                        return (auth()->user()->hasPermissionTo('publish_post') && $record->isPending());
                    }),
                Action::make('Request Revision')
                    ->icon('heroicon-s-pencil-square')
                    ->color('danger')
                    ->form([
                        Textarea::make('notes')
                            ->required()
                    ])
                    ->action(function (array $data) {
                        Notification::make()
                            ->title('Some Changes Required.')
                            ->body($data['notes'])
                            ->actions([
                                \Filament\Notifications\Actions\Action::make('view')
                                    ->button()
                                    ->url(fn() => PostResource::getUrl('edit', ['record' => $this->record]))
                                    ->markAsRead(),
                            ])
                            ->sendToDatabase($this->record->user);
                    })
                    ->visible(function (Post $record) {
                        return (auth()->user()->hasPermissionTo('publish_post') && $record->isPending());
                    })
                    ->disabled(function (Post $record) {
                        return $record->isDraft();
                    }),
                Action::make('preview')
                    ->label('Preview')
                    ->icon('heroicon-o-eye')->url(function (Post $record) {
                        return route('posts.show', $record->slug);
                    }, true)
                    ->color('info'),
            ])
        ];
    }
}
