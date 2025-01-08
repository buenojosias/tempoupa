<?php

namespace App\Enums;

enum ClassificationEnum: int
{
    case AZUL = 1;
    case VERDE = 2;
    case AMARELO = 3;
    case VERMELHO = 4;

    public function getLabel(): string
    {
        return match($this) {
            self::AZUL => 'Não urgente',
            self::VERDE => 'Pouco urgente',
            self::AMARELO => 'Urgência',
            self::VERMELHO => 'Emergência',
        };
    }

    public function getColor(): string
    {
        return match($this) {
            self::AZUL => 'blue',
            self::VERDE => 'green',
            self::AMARELO => 'yellow',
            self::VERMELHO => 'red',
        };
    }
}
