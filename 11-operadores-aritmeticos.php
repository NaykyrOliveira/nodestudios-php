<?php
// Operadores aritmeticos
/* 
* São usados com valores númericos para executar operações
* aritméticas comuns, como adição, subtração, multiplicação etc.
*/

// Adição +
    echo 10 + 10;
    echo "<hr>";

// Subtração -
    echo 15 - 5;
    echo "<hr>";

// Multiplicação *
    echo 3 * 5;
    echo "<hr>";

// Divisão /
    echo 15 / 5;
    echo "<hr>";


// Módulo %
    echo 15 % 4;
    echo "<hr>";

// Exponenciação **  
    echo 3 ** 5;
    echo "<hr>";

// Com variáveis
    $a = 10;
    $b = 20;
    $c = 30;
    $d = 5;
    $e = 16;

    $adicao = $a + $b;
    echo $adicao;
    echo "<hr>";

    $subtracao = $c - $a;
    echo $subtracao;
    echo "<hr>";

    $multiplicacao = $d * $a;
    echo $multiplicacao;
    echo "<hr>";

    $divisao = $c / $a;
    echo $divisao;
    echo "<hr>";

    $modulo = $e % $d;
    echo $modulo;
    echo "<hr>";

    $expo = $a ** $b;
    echo $expo;
    echo "<hr>";

// Ordem de precedência
// * / % + - 
    echo (5 + 7 + 9 + 8) / 4;

