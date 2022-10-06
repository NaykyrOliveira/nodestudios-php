<?php
// Constantes (identificador para valores únicos) e (automáticamente são globais)

    define("NOME", "José Carlos");
    define("IDADE", 24);
    define("ALTURA", 1.89);
    define("CASADO", true);

// Os identificadores das constantes são sempre em maiúsculas
    echo 'Meu nome é '.NOME.' , minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';
    echo "<hr>";

// Constantes em arrays 
    define("TIMES", ['Flamengo', 'Santos', 'São Paulo']);
    echo TIMES[2];
    echo "<hr>";
    var_dump(TIMES);
    echo "<hr>";

    function exibeNome() {
        echo NOME;
    }

    exibeNome();


    