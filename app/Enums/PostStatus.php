<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PostStatus: string implements HasColor, HasIcon, HasLabel
{
    case PENDING = 'pending';
    case PUBLISHED = 'published';

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => 'info',
            self::PUBLISHED => 'success'
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::PUBLISHED => 'Published'
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-clock',
            self::PUBLISHED => 'heroicon-o-check-badge',
        };
    }
}
