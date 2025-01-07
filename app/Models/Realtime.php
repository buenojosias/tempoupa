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

    public function __get($key)
    {
        // Verifica se o campo solicitado é um dos que devem ser formatados
        if (in_array($key, ['blue', 'green', 'yellow', 'red', 'total']) && $this->type === 'time') {
            $value = $this->attributes[$key] ?? 0; // Valor em minutos (padrão 0 se não definido)
            return $this->formatMinutesToReadable($value);
        }

        // Caso contrário, retorna o comportamento padrão
        return parent::__get($key);
    }

    private function formatMinutesToReadable($minutes)
    {
        if ($minutes < 60) {
            return "{$minutes}min"; // Apenas minutos se for menor que 1 hora
        }

        $hours = intdiv($minutes, 60); // Calcula as horas
        $remainingMinutes = $minutes % 60; // Calcula os minutos restantes

        if ($remainingMinutes === 0) {
            return "{$hours}h"; // Apenas horas se não houver minutos restantes
        }

        return "{$hours}h {$remainingMinutes}min"; // Formato completo
    }
}
