<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSlot extends Model
{
    use HasFactory;
    protected $fillable = [
        'date', 'time', 'is_booked',
    ];

    protected $casts = [
        'is_booked' => 'boolean',
    ];
}
