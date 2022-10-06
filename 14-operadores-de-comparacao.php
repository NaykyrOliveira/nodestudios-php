<?php
// Operadores de comparação

// == igual
    if (10 == "10") {
        echo "Positivo";
    } else {
        echo "Negativo";
    }
    
    echo "<hr>";

// != não igual
    if (10 != 11) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// === idêntico
    if (10 === "10") {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// !== não idêntico
    if (10 !== 11) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// <> diferente
    if (10 <> 11) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// < menor que 
    if (10 < 11) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// > maior que 
    if (10 > 11) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// <= menor igual
    if (10 <= 11) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// >= maior igual
    if (10 >= 11) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }

    echo "<hr>";

// <=> spaceship só retorna 3 valores
    // var_dump(20 <=> 30);
    // var_dump(20 <=> 20);
    var_dump(20 <=> 10);