<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetropolitanRegion extends Model
{
    protected $fillable = ['name', 'state_id'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function clinics()
    {
        return $this->hasManyThrough(Clinic::class, City::class);
    }
}
