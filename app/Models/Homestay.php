<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'host_name',
        'location',
        'capacity',
        'price_per_night',
        'description',
        'contact_url',
        'image_path',
        'whatsapp_number',
    ];


public function getFormattedWhatsappNumberAttribute()
{
    // Strips out anything that is not a digit
    return preg_replace('/[^0-9]/', '', $this->whatsapp_number);
}
    /**
     * Optional: Define any casts if needed.
     * E.g., making sure price is treated as a float/decimal.
     */
    protected $casts = [
        'price_per_night' => 'decimal:2',
        'capacity' => 'integer',
        'whatsapp_number' => 'string',
    ];
}