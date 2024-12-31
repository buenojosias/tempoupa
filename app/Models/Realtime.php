<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Realtime extends Model
{
    protected $fillable = [
        'clinic_id',
        'group',
        'classification',
        'label',
        'value',
        'updated_by_user_id',
    ];

    protected function casts(): array
    {
        return [
            'value' => 'integer',
        ];
    }

    public function clinic(): BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }

    public function updatedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_user_id');
    }
}
