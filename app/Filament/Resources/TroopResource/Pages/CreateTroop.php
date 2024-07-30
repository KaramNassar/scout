<?php

namespace App\Filament\Resources\TroopResource\Pages;

use App\Filament\Resources\TroopResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTroop extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TroopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
