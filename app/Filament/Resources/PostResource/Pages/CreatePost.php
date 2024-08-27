<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Admin;
use Filament\Actions;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function afterCreate(): void
    {
        $this->record->admin_id = auth()->id();
        $this->record->save();

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
