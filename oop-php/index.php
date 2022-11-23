<?php
// Boas praticas nomes de classes sempre com a primeira letra maiúscula
class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo $this -> nome." de ".$this -> idade." acabou de falar ";
    }
}

    $rodrigo = new Pessoa();
    $rodrigo -> nome = "Rodrigo Santos";
    $rodrigo -> idade = 26;
    $rodrigo -> Falar();


