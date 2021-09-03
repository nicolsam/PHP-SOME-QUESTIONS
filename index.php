<?php

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

// Executando terceira questão
echo 'Terceira Questão: </br>';
echo 'O maior número é '. Questoes::Questao4(10, 50, 24);
