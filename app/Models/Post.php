<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasSlug;

    protected $fillable = [
        'user_id', 'title', 'slug', 'category', 'excerpt',
        'content', 'featured_image', 'meta_title', 'meta_description',
        'reading_time', 'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    public function isPublished(): bool
    {
        return $this->published_at !== null && $this->published_at->isPast();
    }

    public static function categories(): array
    {
        return [
            'reform'      => 'Réforme Factur-X',
            'facturation' => 'Facturation',
            'tutorial'    => 'Tutoriels FRECORP',
        ];
    }

    public function categoryLabel(): string
    {
        return static::categories()[$this->category] ?? $this->category;
    }
}
