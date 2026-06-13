<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ResolvesMissingUploadFiles;

class AgencyPage extends Model
{
    use HasFactory;
    use ResolvesMissingUploadFiles;

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

    public function getSliderImagesAttribute(mixed $value): array
    {
        return $this->resolvePublicUploadArray($value);
    }
}
