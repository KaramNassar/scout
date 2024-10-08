<?php

namespace App\Models;

use App\Traits\SeoSiteMapTrait;
use Awcodes\Curator\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class Troop extends Model
{
    use HasTranslations;
    use LogsActivity;
    use SeoSiteMapTrait;

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

    protected $casts = [
        'id' => 'integer',
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

    public static function getSitemapItems(): Collection
    {
        return static::get('slug');
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

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    public function getSitemapItemUrl(): string
    {
        return url('/locale/troops/'.$this->slug);
    }

}
