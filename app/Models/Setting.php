<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ResolvesMissingUploadFiles;

class Setting extends Model
{
    use HasFactory;
    use ResolvesMissingUploadFiles;

    protected $fillable = [
        'key',
        'value',
    ];

    public function getValueAttribute($value)
    {
        if ($this->key === 'logo') {
            return $this->resolvePublicUploadPath($value);
        }

        return $value;
    }
}
