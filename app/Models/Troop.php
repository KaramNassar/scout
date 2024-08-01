<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Troop extends Model
{
    use HasTranslations;

    public $timestamps = false;
    public array $translatable = ['name', 'location', 'description'];
    protected $fillable = ['name', 'location', 'description', 'lat', 'lng', 'created_date'];

    public function setNameAttribute($value): void
    {
        $slug = Str::slug($this->getTranslation('name', 'en'));
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = $slug;
    }

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id');
    }

    public function getFeaturedImage(): string|null
    {
        return asset(Media::find($this->featuredImage)?->first()->path) ?? null;
    }

    public function media(): Media|null
    {
        return Media::find($this->featuredImage)?->first() ?? null;
    }

    protected function createdDate(): Attribute
    {
        Carbon::setLocale(config('app.locale'));

        return Attribute::make(
            get: fn(string $value) => Carbon::parse($value)->translatedFormat('F Y'),
        );
    }

}
