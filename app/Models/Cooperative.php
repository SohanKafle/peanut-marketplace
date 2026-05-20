<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cooperative extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "location",
        "story",
        "established_date",
    ];

    protected $casts = [
        "established_date" => "date",
    ];

    public function farmers(): HasMany
    {
        return $this->hasMany(Farmer::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
