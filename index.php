<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__ . '/vendor/autoload.php';

use App\Questao\Questoes;

// Executando primeira questão
echo 'Primeira Questão: </br>';
echo 'O maior número é '. Questoes::Questao1(5, 10);

echo '</br>';
echo '</br>';

// Executando segunda questão
echo 'Segunda Questão: </br>';
echo 'O menor número é ' . Questoes::Questao2(10, 2);

echo '</br>';
echo '</br>';

// Executando terceira questão
echo 'Terceira Questão: </br>';
echo 'O maior número é '. Questoes::Questao3(10, 50, 5);

echo '</br>';
echo '</br>';

// Executando Quarta questão
echo 'Quarta Questão: </br>';
echo 'O menor número é '. Questoes::Questao4(10, 50, 24);

echo '</br>';
echo '</br>';

// Executando Quinta questão
echo 'Quinta Questão: </br>';
echo 'O número do dado retornado é '. Questoes::JogaDado();

echo '</br>';
echo '</br>';

// Executando Sexta questão
echo 'Sexta Questão: </br>';

echo '<pre>';
print_r(Questoes::Questao6(1000)); // Por questões de performance decidi deixar com escolhesse o número de vezes que o dado será lançado
echo '</pre>';

echo '</br>';
echo '</br>';

// Executando Sétima questão
echo 'Sétima Questão: </br>';
Questoes::Questao7(7);

echo '</br>';
echo '</br>';

// Executando Oitava questão
echo 'Oitava Questão: </br>';
echo Questoes::Questao8(10) ? 'O número é impar' : 'O número é par';
