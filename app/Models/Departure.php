<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
    use HasFactory;

    protected $fillable = [
        'trek_id',
        'departure_date',
        'return_date',
        'price',
        'spots_total',
        'spots_available',
        'status',
        'notes',
    ];

    protected $casts = [
        'departure_date' => 'date',
        'return_date' => 'date',
        'price' => 'decimal:2',
    ];

    public function trek()
    {
        return $this->belongsTo(Trek::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function getIsAvailableAttribute()
    {
        return $this->spots_available > 0 && $this->departure_date > now();
    }

    public function getFormattedDateRangeAttribute()
    {
        return $this->departure_date->format('d M') . ' - ' . $this->return_date->format('d M Y');
    }
}
