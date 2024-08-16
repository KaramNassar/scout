<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\Events\TranslationHasBeenSetEvent;
use Spatie\Translatable\HasTranslations;

use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

class MenuItem extends Model
{
    use HasTranslations;
    use LogsActivity;

    public array $translatable = [
        'name',
    ];
    protected $fillable = ['menu_id', 'parent_id', 'name', 'type', 'value', 'url', 'order'];

    public static function getParentItemsForMenu(int $menuId)
    {
        return self::where('menu_id', $menuId)
            ->whereNull('parent_id');
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuItem::class, 'parent_id')->orderBy('order');
    }

    public function children(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->orderBy('order');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    public function setTranslation(string $key, string $locale, $value): self
    {
        $this->guardAgainstNonTranslatableAttribute($key);

        $translations = $this->getTranslations($key);

        $oldValue = $translations[$locale] ?? '';

        if ($this->hasSetMutator($key)) {
            $method = 'set'.Str::studly($key).'Attribute';

            $this->{$method}($value, $locale);

            $value = $this->attributes[$key];
        } elseif($this->hasAttributeSetMutator($key)) { // handle new attribute mutator
            $this->setAttributeMarkedMutatedAttributeValue($key, $value);

            $value = $this->attributes[$key];
        }

        $translations['en'] = $value['en'];
        $translations['ar'] = $value['ar'];

        $this->attributes[$key] = json_encode($translations, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        event(new TranslationHasBeenSetEvent($this, $key, $locale, $oldValue, $value));

        return $this;
    }

}
