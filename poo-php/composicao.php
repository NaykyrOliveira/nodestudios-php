<?php 
// Composição 
/* Na composição, uma classe cria a instância de outra classe dentro si própria
   sendo assim, quando ela for destruída, a outra classe também será. */

class Pessoa {
    public function atribuirNome($nome) {
        return "O nome da pessao é ".$nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome) {
        $this -> pessoa = new Pessoa();
        $this -> nome = $nome;
    }

    public function exibeNome() {
        echo $this -> pessoa -> atribuirNome($this -> nome);
    }
}

$exibe = new Exibe("José");
$exibe -> exibeNome();