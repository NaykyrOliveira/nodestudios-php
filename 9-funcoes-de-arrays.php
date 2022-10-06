<?php
// is_array($array) = verificar se uma determinada variável é um array
    $nomes = array("Rodrigo", "Felipe", "Maria", "José");

    if(is_array($nomes)):
        echo "É um array";
    else:
        echo "Não é um array";
    endif;
    echo "<hr>";

// in_array($valor, array) = verificar se um determinado valor existe em alguma posição do array
    $nomes = array("Rodrigo", "Felipe", "Maria", "José");

    if(in_array("Rodrigo", $nomes)):
        echo "Existe no array";
    else: 
        echo "Não existe no array";
    endif;
    echo "<hr>";

// array_keys($array) = retorna um novo array com as chaves do array passando como parâmetro
    $nomes = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "José");
    $keys = array_keys($nomes);

    print_r($keys);
    echo "<hr>";

// array_values($array) = retorna um novo array com os valores do array passando como parâmetro
    $nomes = array("Rodrigo", "Felipe", "Maria", "José");
    $values = array_values($nomes);

    print_r($values);
    echo "<hr>";

// array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
    $carros = array("Gol", "Corsa", "Celta");
    $motos = array("Pop100", "Biz125", "CG160");
    $veiculos = array_merge($carros, $motos);

    print_r($veiculos);
    echo "<hr>";

// array_pop($array) = exclui a última posição do array
    $carros = array("Gol", "Corsa", "Celta");

    print_r($carros);
    echo"<br>";
    echo array_pop($carros);
    echo"<br>";
    print_r($carros);
    echo "<hr>";

// array_shift($array) = exclui a primeira posição do array
    $carros = array("Gol", "Corsa", "Celta");

    print_r($carros);
    echo"<br>";
    echo array_shift($carros);
    echo"<br>";
    print_r($carros);
    echo "<hr>";

// array_unshift($arr, "valor") = adiciona mais um elemento no início do array 
    $frutas = array("Melancia", "Maracujá", "Banana");

    print_r($frutas);
    echo "<br>";
    array_unshift($frutas, "Laranja", "Uva", "Morango");
    echo "<br>";
    print_r($frutas);
    echo "<hr>";

// array_push($array, "valor", "valor") = adiciona um ou mais elementos no final do array
    $frutas = array("Melancia", "Maracujá", "Banana");

    print_r($frutas);
    echo "<br>";
    array_push($frutas, "Laranja", "Uva", "Morango");
    echo "<br>";
    print_r($frutas);
    echo "<hr>";

// array_combine($keys, $values) = mescla dois arrays passados
    $keys = array("Campeão", "Vice", "Terceiro");
    $values = array("Flamengo", "Vasco", "Botafogo");
    $times = array_combine($keys, $values);

    print_r($times);
    echo "<hr>";

// array_sum() = calcula a soma dos elementos de um array
    $soma = array(7.8, 5.5, 10, 7.2);
    $total = array_sum($soma);
    // echo array_sum($soma);
    echo $total;
    echo "<hr>";

// explode("/", "20/01/2001") = transforma string em array
    /* $data = "30/02/2018";
    $novaData = explode('/', $data);
    
    print_r($novaData); */
    $frase = "Meu nome não é johnny";
    $array = explode(" ", $frase);
    print_r($array);
    echo "<hr>";

// implode("-", arr) = transforma array em string
    $nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
    $string = implode(", ", $nomes);

    echo $string;
