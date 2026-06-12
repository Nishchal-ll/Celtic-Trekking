<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email_address',
        'phone',
        'destination_id',
        'persons',
        'message',
        'is_read',
    ];

    protected $casts = [
        'persons' => 'integer',
        'is_read' => 'boolean',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
