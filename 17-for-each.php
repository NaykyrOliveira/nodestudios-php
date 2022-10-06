<?php 
// Estrutura for (para quando já sabamos o número de repetições)
    for($contador = 0; $contador <= 10; $contador++) {
        echo "8 x $contador = ".($contador * 8)."<br> ";
    }

    echo "<hr>";

// Estrutura foreach (utilizado para percorrer arrays)
    $cores = array("Verde", "Vermelho", "Azul", "Preto");

    foreach($cores as $indice => $valor) {
        echo $indice."-".$valor."<br>";
    }