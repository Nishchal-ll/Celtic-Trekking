<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ResolvesMissingUploadFiles;

class Testimonial extends Model
{
    use HasFactory;
    use ResolvesMissingUploadFiles;

    protected $fillable = [
        'trek_id',
        'name',
        'email',
        'location',
        'avatar',
        'content',
        'rating',
        'trek_date',
        'is_approved',
    ];

    protected $casts = [
        'trek_date' => 'date',
        'is_approved' => 'boolean',
    ];

    public function getAvatarAttribute(?string $value): ?string
    {
        return $this->resolvePublicUploadPath($value);
    }

    public function trek()
    {
        return $this->belongsTo(Trek::class);
    }
}
