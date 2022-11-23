<?php 
// Constante Selft 
class Pessoa {
    const nome = "Rodrigo";

    public function exbibirNome() {
        echo self::nome;
    }
}

/* $pessoa = new Pessoa();
$pessoa -> exbibirNome(); */

// Constante Parent (referenciar a constante da classe pai)
class Rodrigo extends Pessoa {
    const nome = "Oliveira";

    public function exbibirNome() {
        echo parent::nome;
    }
}

$rodrigo = new Rodrigo();
$rodrigo -> exbibirNome();