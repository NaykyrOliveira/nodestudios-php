<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos 
   afim de reaproveitar códigos ou comportamentos generalizados */

// Classe gênerica
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
}

// Deve está em arquivo separado
class carro extends Veiculo {
    public function ligarLimpador() {
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo {
    public function empinar() {
        echo "Empinou em 321";
    }
}

$carro = new Carro();
$carro -> modelo = "Gol";
$carro -> cor = "Vermelho";
$carro -> ano = 2015;
$carro -> Andar();
echo "<br>";
$carro -> ligarLimpador();
var_dump($carro);

$moto = new Moto();
$moto -> modelo = "Honda Biz";
$moto -> cor = "Azul";
$moto -> ano = 2018;
$moto -> Parar();
echo "<br>";
$moto -> empinar();
var_dump($moto);