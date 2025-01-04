<?php

namespace App\Models;

use App\Enums\SituationEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Realtime extends Model
{
    protected $fillable = [
        'clinic_id',
        'type',
        'group',
        'blue',
        'green',
        'yellow',
        'red',
        'total',
        'situation',
        'updated_by_user_id',
    ];

    protected function casts(): array
    {
        return [
            'value' => 'integer',
            'situation' => SituationEnum::class,
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

    // mutator to convert each $this->clinics->total to hours and minutes where type === 'time'
    public function getTotalAttribute($value)
    {
        if ($this->type === 'time') {
            $hours = floor($value / 60);
            $minutes = $value % 60;
            return $hours . 'h ' . $minutes . 'min';
        }

        return $value;
    }
}
