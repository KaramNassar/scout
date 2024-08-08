<?php

namespace App\Models;

use App\Enums\PostStatus;
use Awcodes\Curator\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;

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
        'scheduled_for',
        'featured_image_id',
        'is_featured',
        'admin_id',
        'category_id',
    ];

    protected array $dates = [
        'scheduled_for',
    ];

    protected $casts = [
        'id'            => 'integer',
        'published_at'  => 'date',
        'scheduled_for' => 'datetime',
        'status'        => PostStatus::class,
        'admin_id'      => 'integer',
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
        return Post::whereIsFeatured(1)->take(6)->latest()->get();
    }

    public static function newsPosts(): Collection
    {
        return Post::whereIsFeatured(0)->take(6)->latest()->get();
    }

    public static function activityPosts(): Collection
    {
        return Post::take(6)->latest()->get();
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
        return $this->belongsTo(Admin::class);
    }

    public function isNotPublished(): bool
    {
        return !$this->isStatusPublished();
    }

    public function isStatusPublished(): bool
    {
        return $this->status === PostStatus::PUBLISHED;
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('status', PostStatus::PUBLISHED)->latest('published_at');
    }

    public function scopeScheduled(Builder $query)
    {
        return $query->where('status', PostStatus::SCHEDULED)->latest('scheduled_for');
    }

    public function scopePending(Builder $query)
    {
        return $query->where('status', PostStatus::PENDING)->latest('created_at');
    }

    public function formattedPublishedDate(): ?string
    {
        return $this->published_at?->format('d M Y');
    }

    public function isScheduled(): bool
    {
        return $this->status === PostStatus::SCHEDULED;
    }

    public function relatedPosts($take = 3): array
    {
        return $this->whereHas('categories', function ($query) {
            $query->whereIn('categories.id', $this->categories->pluck('id'))
                ->whereNotIn('posts.id', [$this->id]);
        })->published()->take($take)->get();
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
}
