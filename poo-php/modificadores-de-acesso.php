<?php
/*
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado como public serão acessíveis por todos que quiserem acessá-los

protected - visibilidade protected faz com que todos os herdeiros vejam as proprieadades ou métodos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só pela classe que a declarou
 */

class Veiculo {
    // protected $modelo;
    private $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }

    public function setModelo($m) {
        $this -> modelo = $m;
    }

    public function getModelo () {
        return $this -> modelo;
    }
}

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

$veiculo = new Veiculo();
$veiculo -> setModelo("Hilux");
echo $veiculo -> getModelo();

