<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Farmer extends Model
{
    use HasFactory;

    protected $fillable = [
        "cooperative_id",
        "name",
        "bio",
        "years_farming",
    ];

    public function cooperative(): BelongsTo
    {
        return $this->belongsTo(Cooperative::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
