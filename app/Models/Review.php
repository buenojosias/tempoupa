<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'consultation_id',
        'waiting_time',
        'structure',
        'team',
        'avarage',
        'comment'
    ];

    protected function casts(): array
    {
        return [
            'waiting_time' => 'integer',
            'structure' => 'integer',
            'team' => 'integer',
            'avarage' => 'float',
        ];
    }

    public function consultation(): BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }
}
