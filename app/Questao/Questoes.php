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

    /**
    * Crie uma função em linguagem PHP que receba 2 números e retorne
    * o menor valor entre eles.
    */
    public static function Questao2($val1, $val2) {
        if($val1 < $val2) {
            return $val1;
        }

        return $val2;
    }


    /**
     * Crie uma função em linguagem PHP que receba 3 números e retorne
     * o maior valor, use a função da questão 1
     * */
    public static function Questao3($val1, $val2, $val3) {
        $retorno = self::Questao1($val1, $val2);

        return self::Questao1($retorno, $val3);
    }

    /**
     * Crie uma função em linguagem PHP que receba 3 números e retorne
     * o menor valor, use a função da questão 2
     * */
    public static function Questao4($val1, $val2, $val3) {
        $retorno = self::Questao2($val1, $val2);

        return self::Questao2($retorno, $val3);
    }
}