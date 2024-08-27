<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Enums\PostStatus;
use App\Filament\Resources\PostResource;
use App\Models\Admin;
use App\Models\Post;
use Filament\Actions;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Preview')->make('preview')
                ->icon('heroicon-s-eye')
                ->url(function (Post $record) {
                    return route('posts.show', $record->slug);
                }),
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function beforeSave(): void
    {
        if ($this->data['status'] === PostStatus::PUBLISHED->value) {
            $this->record->published_at = date('Y-m-d H:i:s');
        }
    }

    protected function afterSave(): void
    {
        if ($this->form->getLivewire()->data['status'] === 'pending') {
            Notification::make()
                ->title('New Post Ready for Publication.')
                ->actions([
                    Action::make('view')
                        ->button()
                        ->url(fn() => PostResource::getUrl('view', ['record' => $this->record]))
                        ->markAsRead(),
                ])
                ->sendToDatabase(
                    Admin::whereHas('roles.permissions', fn($query) => $query->where('name', 'publish_post'))->get()
                );
        }
    }

}
