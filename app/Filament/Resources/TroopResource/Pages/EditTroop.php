<?php

namespace App\Filament\Resources\TroopResource\Pages;

use App\Filament\Resources\TroopResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTroop extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TroopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
