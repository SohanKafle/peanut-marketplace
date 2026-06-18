<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['farmer_id', 'name', 'slug', 'description', 'price', 'stock', 'unit', 'featured'];

    public function farmer(): BelongsTo
    {
        return $this->belongsTo(Farmer::class);
    }
}