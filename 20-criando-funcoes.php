<?php 
// Criando Funções
    function exibirNome($nome) {
       echo "Meu nome é $nome"; 
    }

    exibirNome("Adriele Santos");

    echo "<hr>";

    function calcMedia($nome, $nota1, $nota2, $nota3, $nota4) {
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        
        if ($media >= 7) {
            echo "$nome foi Aprovado com a média  ".$media;
        } else {
            echo "<br> $nome foi Reprovado com a média ".$media."<br>";
        }
    }

    calcMedia("Maria", 6, 7, 8, 9);
    calcMedia("Naykyr", 6, 4, 8, 9);