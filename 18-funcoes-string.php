<?php
// Funções para strings
// strtoupper coverte para maiúscula 
/*   
    $nome = "maria fernanda";
    $novoNome = strtoupper($nome);

    echo $novoNome;
*/

// strtolower converte para minúscula
    $nome = "MARIA FERNADA";
    $novoNome = strtolower($nome);

    echo $novoNome;
    echo "<hr>";

// substr retorna uma parte de uma string
    $mensagem = "Olá, Mundo!";
    echo substr($mensagem, 4, 6);

    echo "<hr>";

// str_pad complementa a string com uma quantidade especificada de caracteres
    $objeto = "mouse";
    $novoObjeto = str_pad($objeto, 10, "*");

    echo $novoObjeto;
    echo "<hr>";

// srt_repeat para repetir uma string
    $string = str_repeat("Sucesso! <br>", 5);
    
    echo $string;
    echo "<hr>";

// strlen retorna o comprimento de uma string
    $Mensagem = "Olá, Mundo!";

    echo strlen($Mensagem);
    echo "<hr>";

// str_replace substitui uma palavra em um texto
    $texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
    $novoTexto = str_replace("Argentina", "Brasileira", $texto);

    echo $novoTexto;
    echo "<hr>";

// strpos retorna a posição de uma palavra em um texto
    echo strpos($texto, "copa");