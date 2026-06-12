<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'intro_content',
        'ethics_content',
        'slider_images',
        'is_active',
    ];

    protected $casts = [
        'slider_images' => 'array',
        'is_active' => 'boolean',
    ];
}
