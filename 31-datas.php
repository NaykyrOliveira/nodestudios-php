<?php
// Datas e Horas
// Retona o dia com 2 digitos
    echo date('d');
    echo "<hr>";

// Retorna o dia em formato texto com 3 digitos
    echo date('D');
    echo "<hr>";

// Retorna o mês com 2 digitos
    echo date('m');
    echo "<hr>";

// Retorna o mês em formato texto 3 digitos
    echo date('M');
    echo "<hr>";

// Retorna o ano com 2 digitos
    echo date('y');
    echo "<hr>";

// Retorna o ano com 4 digitos
    echo date('Y');
    echo "<hr>";

// Retorna o dia mês e ano completos
    echo date('d/m/Y');
    echo "<hr>";

// Retorna o dia da semana em formato texto
    echo date('l');
    echo "<hr>";

// Retorna a hora no formato de 12 horas
    echo date('h');
    echo "<hr>";

// Retorna a hora no formato de 24 horas
    echo date('H');
    echo "<hr>";

// Retorna a hora no formato 24 horas com minutos e segundos
    echo date('H:i:s');
    echo "<hr>";

// Retorna a hora no formato 24 horas com minutos e segundos com PM
    echo date('H:i:s A');
    echo "<hr>";

// Setar a hora correta com time zone
    date_default_timezone_set('America/Sao_paulo');
    echo date('H:i:s');
    echo "<hr>";

// Armazenar datas no banco de dados
    $date = date('Y-m-d'); // Date
    echo $date;
    echo "<hr>";

    $datetime = date('Y-m-d-H:i:s');
    echo "<hr>";

/* Função TIME (retorna a quantidade de segundos
 que se passaram desde 1970 até hoje) */ 
// Unix Time Stamp
    echo time();
    echo "<hr>";
// Formatar o TIME
    $time = time();
    echo date('d/m/Y', $time);
    echo "<hr>";

// MKTIME datas passadas ou futuras
    $data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
    echo date('d/m - h:i', $data_pagamento);
    echo "<hr>";

// STRTOTIME
    // Date $data = '2019-04-10'; 
    $data = '2019-04-10 13:30:00'; // Datetime 
    // converter de string para time com função strtotime
    $data = strtotime($data);
    echo date('d/m/Y', $data);
