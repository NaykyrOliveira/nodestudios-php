<?php
// Polimorfismo é simplemente substituir ou reescrever um método herdado da classe pai 
    

class Animal {

    public function Andar() {
        echo "O animal andou";
    }

    public function Correr() {
        echo "O animal correu";
    }
}

class Cavalo extends Animal {
 
    public function Andar() {
       // echo "O cavalo andou"; 
// Mas substituir ou reescreve-lo não significa que ele ira fazer a mesma coisa
       $this -> Correr();
    }
}

$animal = new Cavalo();
$animal -> Andar();