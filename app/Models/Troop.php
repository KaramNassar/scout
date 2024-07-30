<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Troop extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasTranslations;

    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'location', 'description', 'lat', 'lng', 'created_date'];

    public array $translatable = ['name', 'location', 'description'];

    protected function createdDate(): Attribute
    {
        Carbon::setLocale(config('app.locale'));

        return Attribute::make(
            get: fn(string $value) => Carbon::parse($value)->translatedFormat('F Y'),
        );
    }

}
