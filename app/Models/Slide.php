<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ResolvesMissingUploadFiles;

class Slide extends Model
{
    use HasFactory;
    use ResolvesMissingUploadFiles;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'link',
        'button_text',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getImageAttribute(?string $value): ?string
    {
        return $this->resolvePublicUploadPath($value);
    }
}
