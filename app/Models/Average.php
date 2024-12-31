<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Average extends Model
{
    protected $fillable = [
        'clinic_id',
        'month',
        'weekday',
        'shift',
        'group',
        'patients_quantity',
        'waiting_time',
        'situation',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
