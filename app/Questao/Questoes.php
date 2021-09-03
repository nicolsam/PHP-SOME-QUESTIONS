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

    /**
     * Crie uma função em linguagem PHP chamada JogaDado() que retorna,
     * através de sorteio (buscar na internet como gerar números
     * aleatórios em PHP), um número de 1 até 6.
     */
    public static function JogaDado() {
        return rand(1, 6);
    }

    /** 
     * Use a função da questão passada e lance o dado 1 milhão de vezes.
     * Conte quantas vezes cada número saiu. A probabilidade deu certo?
     * Ou seja, a porcentagem dos números foi parecida?
    */
    public static function Questao6($numberOfTimes) {
        $contagem = [
            'num1' => 0,
            'num2' => 0,
            'num3' => 0,
            'num4' => 0,
            'num5' => 0,
            'num6' => 0
        ];

        for($i = 0; $i < $numberOfTimes; $i++) {
            $retorno = self::JogaDado();

            if($retorno === 1) {
                $contagem['num1']++;
            }
            if($retorno === 2) {
                $contagem['num2']++;
            }
            if($retorno === 3) {
                $contagem['num3']++;
            }
            if($retorno === 4) {
                $contagem['num4']++;
            }
            if($retorno === 5) {
                $contagem['num5']++;
            }
            if($retorno === 6) {
                $contagem['num6']++;
            }
        }

        return $contagem;
    }
}