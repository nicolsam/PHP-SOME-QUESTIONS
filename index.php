<?php

require __DIR__ . '/vendor/autoload.php';

use App\Questao\Questoes;

// Executando primeira questão
echo 'Primeira Questão: </br>';
echo Questoes::Questao1(5, 10);

echo '</br>';
echo '</br>';

// Executando segunda questão
echo 'Segunda Questão: </br>';
echo Questoes::Questao2(10, 2);