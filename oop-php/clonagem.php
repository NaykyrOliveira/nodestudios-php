<?php
// Referência e Clonagem de objetos

class Pessoa {
    public $idade; 

    public function __clone() {
        echo "Clonagem de objetos ";
    }
}

$pessoa = new Pessoa();
$pessoa -> idade = 25;

// $pessoa2 faz referência ao objeto $pessoa
// $pessoa2 = $pessoa;
$pessoa2 = clone $pessoa;
$pessoa2 -> idade = 35;

echo $pessoa2 -> idade;