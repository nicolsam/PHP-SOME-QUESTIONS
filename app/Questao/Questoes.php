<?php

namespace App\Questao;

class Questoes {

    /**
    * Crie uma função em linguagem PHP que receba 2 números e retorne
    * o maior valor entre eles.
    */
    public static function Questao1($val1, $val2) {
        if($val1 > $val2) {
            return $val1;
        }

        return $val2;
    }

}