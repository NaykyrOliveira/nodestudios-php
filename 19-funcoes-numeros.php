<?php
// Funções para Números
// number_format formatar valores com casas decimais 
    $db = 1234.56;
    $preco = number_format($db, 2, ",", ".");

    echo "O valor do produto é R$: ".$preco;
    echo "<hr>";

// round arredonda valores
    echo round(3.6);
    echo "<hr>";

// ceil arredondar valores para cima
    echo ceil(3.1);
    echo "<hr>";

// floor arredondar valores para baixo
    echo floor(8.90);
    echo "<hr>";

// rand sortear valores aleatórios 
    echo rand(1, 20);
    
