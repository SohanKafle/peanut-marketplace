<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomestayBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_name', 'guest_email', 'guest_phone', 'room_name', 
        'guests_count', 'check_in', 'check_out', 'total_price', 
        'status', 'special_requests'
    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
    ];
}