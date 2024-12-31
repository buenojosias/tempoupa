<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'status', 'metropolitan_region_id'];

    public function metropolitanRegion()
    {
        return $this->belongsTo(MetropolitanRegion::class);
    }

    public function clinics()
    {
        return $this->hasMany(Clinic::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
