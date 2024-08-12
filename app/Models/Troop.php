<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Troop extends Model
{
    use HasTranslations;

    public $timestamps = false;

    public array $translatable = ['name', 'location', 'description'];

    protected $with = ['featuredImage'];

    protected $fillable = [
        'name',
        'slug',
        'featured_image_id',
        'location',
        'description',
        'lat',
        'lng',
        'created_date'
    ];

    private array $arabicMonths = [
        "كانون الثاني",
        "شباط",
        "آذار",
        "نيسان",
        "أيار",
        "حزيران",
        "تموز",
        "آب",
        "أيلول",
        "تشرين الأول",
        "تشرين الثاني",
        "كانون الأول"
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

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id');
    }

    public function getCreatedDateAttribute($value): string
    {
        $date = Carbon::parse($value);
        $month = config('app.locale') === 'ar' ? $this->arabicMonths[$date->month - 1] : $date->monthName;
        $year = $date->year;

        return "$month $year";
    }

}
