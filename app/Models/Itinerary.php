<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'trek_id',
        'day',
        'title',
        'description',
        'accommodation',
        'meals',
        'altitude',
        'walking_time',
    ];

    public function trek()
    {
        return $this->belongsTo(Trek::class);
    }
}
