<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cooperative extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'logo', 'address', 'phone', 'email'];

    public function farmers(): HasMany
    {
        return $this->hasMany(Farmer::class);
    }
}