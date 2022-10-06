<?php
    $nome = 'Maria Fernanda';
    // Tudo que estiver entre aspas simples é interpretada como texto
    echo 'Meu nome é '.$nome.' e minha idade é \'23\'';
    // Aspas duplas são interpretativas, se houver variáveis elas seram interpretadas
    echo "<hr>";
    echo "Meu nome é \"$nome\"";