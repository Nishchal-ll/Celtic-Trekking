<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Storage;

trait ResolvesMissingUploadFiles
{
    protected function resolvePublicUploadPath(?string $path): ?string
    {
        if (! $path) {
            return null;
        }

        if (! Storage::disk('public')->exists($path)) {
            return null;
        }

        return $path;
    }

    protected function resolvePublicUploadArray(mixed $value): array
    {
        if (is_array($value)) {
            $paths = $value;
        } else {
            $paths = json_decode($value ?? '[]', true);
        }

        if (! is_array($paths)) {
            return [];
        }

        return array_values(array_filter($paths, function (?string $path) {
            return $path && Storage::disk('public')->exists($path);
        }));
    }
}
