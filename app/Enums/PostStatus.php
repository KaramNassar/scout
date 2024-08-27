<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PostStatus: string implements HasColor, HasIcon, HasLabel
{
    case PENDING = 'pending';
    case PUBLISHED = 'published';
    case DRAFT = 'draft';

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => 'info',
            self::PUBLISHED => 'success',
            self::DRAFT => 'danger'
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::PENDING => 'Ready to publish',
            self::PUBLISHED => 'Published',
            self::DRAFT => 'Draft'
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-clock',
            self::PUBLISHED => 'heroicon-o-check-badge',
            self::DRAFT => 'heroicon-o-document-text',
        };
    }
}
