<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

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

    public function trek()
    {
        return $this->belongsTo(Trek::class);
    }
}
