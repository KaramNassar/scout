<?php

namespace App\Filament\Resources\TroopResource\Pages;

use App\Filament\Resources\TroopResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTroops extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TroopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
