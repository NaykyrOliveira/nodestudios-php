<?php
    $numero = 50;
    echo $numero;

/* Condicionais 
* if
* else
* elseif
*/ 
    if($numero == 10): 
        echo " É igual a 10 ";
    elseif($numero <= 9):
        echo " É menor ou igual a 9 ";
    else: 
        echo " É diferente de 10 ";
    endif;
    echo "<hr>";

// Operador ternário
    $media = 6;

    echo ($media >= 7) ? "Aprovado" : "Reprovado";
    echo "<hr>";

/* Condicionais
* switch
* case 
 */

    $cor = "Amarela";

    switch($cor):
        case "Vermelho":
            echo "Sua cor preferida é o vermelho";
            break;
        case "Verde":
            echo "Sua cor preferida é o verde";
            break;
        case "Azul":
            echo "Sua cor preferida é azul";
            break;
        default:
            echo "Sua cor preferida não é vermelho, verde ou azul";
    endswitch;