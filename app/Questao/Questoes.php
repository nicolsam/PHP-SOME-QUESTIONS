<?php

namespace App\Questao;

class Questoes {

    /**
    * Crie uma função em linguagem PHP que receba 2 números e retorne
    * o maior valor entre eles.
    */
    public static function Questao1($val1, $val2) {
        if($val1 > $val2) {
            return 'O maior número é '. $val1;
        }

        return 'O maior número é ' . $val2;
    }

    /**
    * Crie uma função em linguagem PHP que receba 2 números e retorne
    * o menor valor entre eles.
    */
    public static function Questao2($val1, $val2) {
        if($val1 < $val2) {
            return 'O menor número é '. $val1;
        }

        return 'O menor número é '. $val2;
    }
}