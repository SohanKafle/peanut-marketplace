<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = [
        'user_id',
        'total_amount',
        'payment_status',
        'payment_method',
        'status',
        'city',
    ];

    /**
     * Get the customer that placed the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}