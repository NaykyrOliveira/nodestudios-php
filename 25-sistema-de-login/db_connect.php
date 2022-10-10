<?php
// Conexão com o banco de dados 
    $servername = "localhost:8080/";
    $username = "root";
    $password = "";
    $db_name = "sistemalogin";
    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if (mysqli_connect_error()) {
        echo "Falha na conexão: ".mysqli_connect_error();
    }