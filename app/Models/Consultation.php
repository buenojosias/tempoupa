<?php

namespace App\Models;

use App\Enums\ClassificationEnum;
use App\Enums\ConsultationEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consultation extends Model
{
    use HasFactory;

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
            'classification' => ClassificationEnum::class,
            'status' => ConsultationEnum::class,
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
