<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'image',
        'banner_image',
        'country',
        'continent',
        'is_featured',
        'order',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function treks()
    {
        return $this->hasMany(Trek::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
