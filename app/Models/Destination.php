<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ResolvesMissingUploadFiles;

class Destination extends Model
{
    use HasFactory;
    use ResolvesMissingUploadFiles;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'image',
        'banner_image',
        'hero_title',
        'hero_subtitle',
        'intro_title',
        'intro_content',
        'intro_gallery',
        'info_title',
        'info_content',
        'country',
        'continent',
        'is_featured',
        'order',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'intro_gallery' => 'array',
    ];

    public function getImageAttribute(?string $value): ?string
    {
        return $this->resolvePublicUploadPath($value);
    }

    public function getBannerImageAttribute(?string $value): ?string
    {
        return $this->resolvePublicUploadPath($value);
    }

    public function getIntroGalleryAttribute(mixed $value): array
    {
        return $this->resolvePublicUploadArray($value);
    }

    public function treks()
    {
        return $this->hasMany(Trek::class);
    }

    public function fixedDepartureTreks()
    {
        return $this->hasMany(Trek::class)
            ->where('is_fixed_departure', true)
            ->orderBy('fixed_departure_order')
            ->orderBy('name');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
