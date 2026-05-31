<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trek extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'name',
        'slug',
        'description',
        'short_description',
        'image',
        'gallery',
        'duration_days',
        'difficulty',
        'max_altitude',
        'best_season',
        'group_size_min',
        'group_size_max',
        'price',
        'included',
        'not_included',
        'is_active',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'gallery' => 'array',
        'included' => 'array',
        'not_included' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function departures()
    {
        return $this->hasMany(Departure::class);
    }

    public function itinerary()
    {
        return $this->hasMany(Itinerary::class)->orderBy('day');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getDifficultyLabelAttribute()
    {
        return match($this->difficulty) {
            1 => __('trek.difficulty.easy'),
            2 => __('trek.difficulty.moderate'),
            3 => __('trek.difficulty.challenging'),
            4 => __('trek.difficulty.difficult'),
            5 => __('trek.difficulty.extreme'),
            default => __('trek.difficulty.unknown'),
        };
    }
}
