<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consultation extends Model
{
    protected $fillable = [
        'clinic_id',
        'user_id',
        'entry_time',
        'consultation_time',
        'departure_time',
        'group',
        'classification',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'entry_time' => 'datetime',
            'consultation_time' => 'datetime',
            'departure_time' => 'datetime',
        ];
    }

    public function clinic(): BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }

    public function review(): HasOne
    {
        return $this->hasOne(Review::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
