<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'city_id',
        'name',
        'type',
        'address',
        'neighborhood',
        'latitude',
        'longitude',
        'active',
        'fulltime',
        'has_display',
        'multilevel',
        'capacity',
        'rating',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
            'fulltime' => 'boolean',
            'has_display' => 'boolean',
            'multilevel' => 'boolean',
        ];
    }

    public function averages(): HasMany
    {
        return $this->hasMany(Average::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function consultations(): HasMany
    {
        return $this->hasMany(Consultation::class);
    }

    public function realtimes(): HasMany
    {
        return $this->hasMany(Realtime::class);
    }

    public function records(): HasMany
    {
        return $this->hasMany(Record::class);
    }

    public function reviews(): HasManyThrough
    {
        return $this->hasManyThrough(Review::class, Consultation::class);
    }

    public function situations(): HasMany
    {
        return $this->hasMany(Situation::class);
    }
}
