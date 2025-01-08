<?php

namespace App\Enums;

enum ConsultationEnum: int
{
    case AGUARDANDO_TRIAGEM = 1;
    case AGUARDANDO_CONSULTA = 2;
    case EM_CONSULTA = 3;
    case OUTROS_PROCEDIMENTOS = 4;
    case RECEBEU_ALTA = 5;
    case DESISTIU = 6;

    public function getLabel(): string
    {
        return match($this) {
            self::AGUARDANDO_TRIAGEM => 'Aguardando triagem',
            self::AGUARDANDO_CONSULTA => 'Aguardando consulta',
            self::EM_CONSULTA => 'Em consulta',
            self::OUTROS_PROCEDIMENTOS => 'Outros procedimentos',
            self::RECEBEU_ALTA => 'Recebeu alta',
            self::DESISTIU => 'Desistiu',
        };
    }
}
