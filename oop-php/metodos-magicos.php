<?php
// clone*
// construct*







class Pessoa {
    //private $nome;
    private $dados = array();

// set
    public function __set($nome, $valor) {
        $this -> dados[$nome] = $valor;
    }

// get
    public function __get($nome) {
        return $this -> dados[$nome];
    }

// tostring
    public function __toString() {
        return "Tentei imprimir o objeto";
    }

// invoke
    public function __invoke() {
        return "Objeto como função";
    }  
 }       
    


$pessoa = new Pessoa();
// $pessoa -> nome = "Danilo"; (set)
// $pessoa -> idade = 50; 
// $pessoa -> sexo = "M"; 
// echo $pessoa -> nome."<br>"; (get)
// echo $pessoa -> idade."<br>"; (get)
// echo $pessoa -> sexo."<br>"; (get)
// echo $pessoa; (toString)

echo $pessoa(); // (invoke)