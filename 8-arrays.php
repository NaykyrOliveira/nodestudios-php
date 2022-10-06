<?php 
// Arrays númericos 
    $carros = array(1 => "Celta", 2 => "Fusca", 4 => "Gol");
    $carros[] = "Kombi";
    $carros[0] = "Opala";
    // print_r($carros);
    echo $carros[0];
    echo "<hr>";

    $motos = array();
    $motos[] = "Yamaha";
    $motos[] = "Honda";
    $motos[5] = "Suzuki";
    // print_r($motos);
    echo $motos[5];
    echo "<hr>";

    $clientes = ["Rodrigo", "Felipe", "Bia"];
    print_r($clientes);
    echo "<hr>";

// Count (exibir a quantidade e elementos em um array)
    // echo count($clientes);
    $totalClientes = count($clientes);
    echo $totalClientes;
    echo "<hr>";

//  Foreach 
    /* foreach($carros as $valor) {
        echo $valor."<br>";
    }
    */
    echo "<hr>";

    foreach($motos as $valor) {
        echo $valor."<br>";
    }
    echo "<hr>";

// Arrays associativos
    $pessoa  = array("nome" => "Maria", "idade" => 23, "altura" => 1.54);
    $pessoa["cidade"] = "Itabuna";
    // print_r($pessoa);
    foreach($pessoa as $indice => $valor) {
        echo $indice.":".$valor."<br>";
    }
    echo "<hr>";
    
// Arrays multidimensionais
    $times = array("cariocas" => array("Campeão" => "Vasco", "Vice" => "Flamengo", "Terceiro" => "Botafogo"),
                   "paulistas" => array("Campeão" => "Santos", "Vice" => "São Paulo", "Terceiro" => "Palmeiras"),
                   "baianos" => array("Campeão" => "Bahia", "Vice" => "Vitória", "Terceiro" => "Itabuna")
                );
    echo "<br>";

    foreach($times["cariocas"] as $indice => $valor) {
        echo $indice.": ".$valor."<br>";
    }
    echo "<hr>";

    foreach($times["paulistas"] as $indice => $valor) {
        echo $indice.": ".$valor."<br>"; 
    }
    echo "<hr>";

    foreach($times["baianos"] as $indice => $valor) {
        echo $indice.": ".$valor."<br>";
    }
