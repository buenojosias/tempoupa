<?php

namespace App\Enums;

enum SituationEnum: string
{
    case TRANQUILA = 'T';
    case MODERADA = 'M';
    case LOTADA = 'L';
    case SUPERLOTADA = 'S';

    public function getLabel(): string
    {
        return match($this) {
            self::TRANQUILA => 'Tranquila',
            self::MODERADA => 'Moderada',
            self::LOTADA => 'Lotada',
            self::SUPERLOTADA => 'Superlotada',
        };
    }

    public function getColor(): string
    {
        return match($this) {
            self::TRANQUILA => 'green',
            self::MODERADA => 'blue',
            self::LOTADA => 'orange',
            self::SUPERLOTADA => 'red',
        };
    }
}
