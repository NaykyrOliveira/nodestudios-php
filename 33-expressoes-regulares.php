<?php
// Expressões Regulares
/* Define um padrão a ser usado para procurar ou
   substituir palavras ou grupos de palavras. */

/* ^ inicio da expressão e $ final da expressão
    $string = "abc";
    $padrao = "/^a/";
    $padrao = "/^abc$/"; 

/* [] conjunto de caracteres
    $string = "z";
    $padrao = "/^[a-z]$/"; // Lestras minúsculas
    $padrao = "/^[A-Z]/"; Letras maiúsculas
    $padrao = "/^[A-Za-z]/"; Letras maiúsculas e minúsculas
    $padrao = "/^[A-Za-z0-9]/"; Letras e números
*/ 

/* - /i - case sensitive
    $string = "Q";
    $padrao = "/^[a-z0-9]$/i";
*/

/* {} ocorrências -?{0,1} *{0,} +{1,}
    $string = "q1";
    $padrao = "/^[a-z0-9]{1,4}$/i";
*/

/* /^[a-z0-9.\-\_]+@[a-z0-9.-\_]+\.(com|br|com.br|net$/
    $string = "contato@gmail.com";
    $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+.$/i";
*/

// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
    $string = "13/09/2022";
    $padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i";

    if(preg_match($padrao, $string)) {
        echo "Válido";
        echo "<hr>";
        echo $string;
    } else {
        echo "Inválido";
        echo "<hr>";
    }