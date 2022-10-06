<?php
// Escopo Global
    $nome = "Maria Fernanda";
    $a = 1;
    $b = 3;
    $c = 7;

// Escopo Local
    function exibeNome() {
        global $nome;
        echo $nome;
    }

    exibeNome();
    echo "<hr>";

    function exibeCidade() {
        // Escopo Local
        global $cidade;
        $cidade = "Rio de Janeiro";
        
    }

    exibeCidade();
    echo $cidade;
    echo "<hr>";

    function soma() {
       echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }

    soma();