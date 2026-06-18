<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Farmer extends Model
{
    protected $fillable = ['cooperative_id', 'name', 'slug', 'photo', 'bio', 'municipality', 'experience_years'];

    public function cooperative(): BelongsTo
    {
        return $this->belongsTo(Cooperative::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}