<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class State extends Model
{
    protected $fillable = ['name', 'abbreviation'];
    public $timestamps = false;

    public function regions(): HasMany
    {
        return $this->hasMany(MetropolitanRegion::class);
    }

    public function cities(): HasManyThrough
    {
        return $this->hasManyThrough(City::class, MetropolitanRegion::class);
    }
}
