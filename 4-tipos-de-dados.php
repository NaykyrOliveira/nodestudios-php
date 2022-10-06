<?php
/* Dados Escalares */ 
// string (String é um conjunto de caracteres entre aspas simples ' ' ou dulplas " ")
    $nome = "Maria 123";

// var_dump função para mostra informações da variável
    var_dump($nome);

    // Verificar se é uma string
    if(is_string($nome)):
        echo "É uma string";
    else:
        echo "Não é uma string";
    endif;

    echo "<hr>";

// int (Números inteiros naturais e negativos)
    $idade = 23;
    var_dump($idade);

    // Verificar se é inteiro
    if(is_int($idade)):
        echo "É um número inteiro";
    else:
        echo "Não é um número inteiro";
    endif;

    echo "<hr>";

// float (Números reais)
    $altura = 1.74;
    // Verificar se é float
    var_dump($altura);

    if(is_float($altura)):
        echo "É um número real";
    else:
        echo "Não é um número real";
    endif;

    echo "<hr>";

// boolean (Verdadeiro ou falso)
    $admin = true;
    // Verificar se é booleano
    var_dump($admin);

    if(is_bool($admin)):
        echo "É booleano";
    else:
        echo "Não é booleano";
    endif;

    echo "<hr>";

/* Dados Compostos */
// array (Variavél que armazena vários valores)
    $carros = array("Gol", "Uno", "Celta", 12, 20.6, true);
    var_dump($carros);

    if(is_array($carros)):
        echo "É um array";
    else:
        echo "Não é um array";
    endif;

    echo "<hr>";

// object
    class Cliente {
        public $nome;
        public function atribuirNome($nome) {
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();
    $cliente->atribuirNome("Naykyr");
    var_dump($cliente);

    if(is_object($cliente)):
        echo "É um objeto";
    else:
        echo "Não é um objeto";
    endif;

    echo "<hr>";

/* Dados Especiais */
// NULL (variável sem valor atribuido)
    $cidade = NULL;
    var_dump($cidade);

// Resource (tipo de dado para fazer referência a recursos externos)



