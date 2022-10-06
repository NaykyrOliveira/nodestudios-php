<?php
/*
$_POST coletar dados de formulários (as informações são enviadas de forma invisível no corpo da solicitação HTTP)
*/ 
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "Seu nome é $nome e seu email é $email. <br>";
    var_dump($_POST);