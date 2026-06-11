<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'url',
        'open_in_new_tab',
        'order',
    ];

    protected $casts = [
        'open_in_new_tab' => 'boolean',
    ];
}
