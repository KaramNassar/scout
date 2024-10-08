<?php

namespace App\Livewire;

use Exception;
use Filament\Facades\Filament;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Support\Facades\FilamentView;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Jeffgreco13\FilamentBreezy\Livewire\MyProfileComponent;
use Throwable;

class CustomProfile extends MyProfileComponent
{

    public ?array $data = [];

    public $user;

    public function mount(): void
    {
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $data = $this->getUser()->attributesToArray();

        $this->form->fill($data);
    }

    public function getUser(): Authenticatable|Model
    {
        $user = Filament::auth()->user();

        if (!$user instanceof Model) {
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.'
            );
        }

        return $user;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('avatar')
                    ->directory('avatar')
                    ->imageEditor()
                    ->getUploadedFileNameForStorageUsing(fn () => auth()->user()->username . '.jpg')
                    ->avatar(),
                Grid::make()->schema([
                    TextInput::make('username')
                        ->disabled()
                        ->required(),
                    TextInput::make('email')
                        ->disabled()
                        ->required(),
                ]),
                Grid::make()->schema([
                    TextInput::make('firstname')
                        ->required(),
                    TextInput::make('lastname')
                        ->required()
                ]),
            ])
            ->operation('edit')
            ->model($this->getUser())
            ->statePath('data');
    }

    public function submit(): void
    {
        try {
            $data = $this->form->getState();

            $this->handleRecordUpdate($this->getUser(), $data);

            Notification::make()
                ->title('Profile updated')
                ->success()
                ->send();

            $this->redirect('my-profile', navigate: FilamentView::hasSpaMode() && is_app_url('my-profile'));
        } catch (Throwable $th) {
            Notification::make()
                ->title('Failed to update.')
                ->danger()
                ->send();
        }
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);

        return $record;
    }

    public function render(): View
    {
        return view("livewire.custom-profile");
    }
}
