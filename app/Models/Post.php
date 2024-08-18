<?php

namespace App\Models;

use App\Enums\PostStatus;
use App\Traits\SeoSiteMapTrait;
use Awcodes\Curator\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;
    use LogsActivity;
    use SeoSiteMapTrait;

    public array $translatable = [
        'title',
        'body',
    ];

    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'body',
        'status',
        'published_at',
        'featured_image_id',
        'is_featured',
        'admin_id',
        'category_id',
    ];

    protected $with = ['featuredImage', 'tags'];

    protected $casts = [
        'id'           => 'integer',
        'published_at' => 'timestamp',
        'status'       => PostStatus::class,
        'admin_id'     => 'integer',
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
        $slug = Str::slug($this->getTranslation('title', 'en')) ?: Str::slug($this->getTranslation('title', 'ar'));

        $this->slug = $slug;

        $this->saveQuietly();
    }

    public static function featuredPosts(): Collection
    {
        return Post::whereIsFeatured(1)
            ->without('tags')
            ->take(6)
            ->latest('published_at')
            ->get();
    }

    public static function newsPosts(): Collection
    {
        return Post::whereIsFeatured(0)
            ->whereRelation('category', function ($query) {
                $query->whereNotIn('slug', ['camps', 'meetings']);
            })
            ->take(6)
            ->latest('published_at')
            ->get();
    }

    public static function activityPosts(): Collection
    {
        return Post::whereIsFeatured(0)
            ->without('tags')
            ->whereRelation('category', function ($query) {
                $query->whereIn('slug', ['camps', 'meetings']);
            })
            ->take(6)
            ->latest('published_at')
            ->get();
    }

    public static function getSitemapItems(): Collection
    {
        return static::latest()->get(['slug', 'updated_at', 'created_at']);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', PostStatus::PUBLISHED);
    }

    public function scopePending(Builder $query)
    {
        return $query->where('status', PostStatus::PENDING)->latest('created_at');
    }

    public function relatedPosts($take = 3): Collection
    {
        return $this->whereHas('category', function (Builder $query){
            $query->where('category_id', $this->category->id);
        })
            ->published()
            ->take($take)
            ->get();
    }

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id');
    }

    public function gallery(): BelongsToMany
    {
        return $this
            ->belongsToMany(Media::class, 'media_post', 'post_id', 'media_id');
    }

    public function getPublishedAtAttribute($value): string
    {
        $date = Carbon::parse($value);
        $day = $date->day;
        $month = config('app.locale') === 'ar' ? $this->arabicMonths[$date->month - 1] : $date->monthName;
        $year = $date->year;

        return "$day $month , $year";
    }

    public function troop(): BelongsTo
    {
        return $this->belongsTo(Troop::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    public function getSitemapItemUrl(): string
    {
        return url('/locale/posts/'.$this->slug);
    }
}
