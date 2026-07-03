<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'unit',
        'status',
        'featured',
        'image',
        'producer_name',
        'ward_number',
        'village_name',
        'contact_link',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name . '-' . Str::random(5));
        });
    }
}