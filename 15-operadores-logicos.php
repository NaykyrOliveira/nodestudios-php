<?php 
// Operadores lógicos
// Nos permitem fazer comparações entre expressões

// e (&& - and) retorna verdadeiro se as duas expressões forem verdadeira
    $idade = 26;
    $nome = "Maria";

    if(($idade == 26) and ($nome == "Rodrigo")) {
        echo "É verdadeiro";
    } else {
        echo "É falso";
    }

    echo "<hr>";

// e (|| - or) retorna verdadeiro se uma expressões forem verdadeira
    if(($idade == 23) || ($nome == "Carlos")) {
        echo "É verdadeiro";
    } else {
        echo "É falso";
    }

    echo "<hr>";

// e (&& - and) só retorna verdadeiro se uma ou outra expressão for verdadeira
    if(($idade == 25) xor ($nome == "Carlos")) {
        echo "É verdadeiro";
    } else {
        echo "É falso";
    }

    echo "<hr>";

// e (&& - and) retorna verdadeiro se as duas expressões forem verdadeira
    if(!($idade == 25) and !($nome == "Rodrigo")) {
        echo "É verdadeiro";
    } else {
        echo "É falso";
    }

    echo "<hr>";