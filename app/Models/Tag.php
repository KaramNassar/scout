<?php

namespace App\Models;

use App\Rules\UniqueTranslation;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasTranslations;
    use LogsActivity;

    public array $translatable = ['name'];

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::created(function ($model) {
            $model->updateSlug();
        });

        static::updated(function ($model) {
            $model->updateSlug();
        });
    }

    public function updateSlug(): void
    {
        $slug = Str::slug($this->getTranslation('name', 'en')) ?: Str::slug($this->getTranslation('name', 'ar'));

        $this->slug = $slug;

        $this->saveQuietly();
    }

    public static function getForm(array $otherLocaleData = [], int $id = null): array
    {
        return
            [
                TextInput::make('name')
                    ->rule(new UniqueTranslation('tags', 'name', $otherLocaleData, $id))
                    ->required()
                    ->maxLength(155),
            ];
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['name']);
    }

}
