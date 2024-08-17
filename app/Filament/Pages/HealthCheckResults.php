<?php

namespace App\Filament\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResultsAlias;

class HealthCheckResults extends BaseHealthCheckResultsAlias
{
    use HasPageShield;

    protected static ?int $navigationSort = 5;

}
