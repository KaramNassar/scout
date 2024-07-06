<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityLogResource\Pages;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Rmsramos\Activitylog\Resources\ActivitylogResource as RmsramosActivitylogResource;

class ActivityLogResource extends RmsramosActivitylogResource implements HasShieldPermissions
{

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivityLogs::route('/'),
            'view'  => Pages\ViewActivityLog::route('/{record}'),
        ];
    }
}
