<?php

namespace App;

enum TipoCurso: string
{
    case GRATUITO = 'gratuito';
    case PAGO = "pago";

    public function label(): string 
    {
        return match($this){
            self::GRATUITO => 'Curso gratuito',
            self::PAGO => 'Curso de pago',
        };
    }
}