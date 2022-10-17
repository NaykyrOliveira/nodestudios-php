<?php
// Sessão
    session_start();
// Conexão
    require_once 'db_connect.php';
// Clear XSS (Cross Site Scripting)
/*
    Ataque Cross Site Scripting
    semelhante ao SQL Injection porém ao invés 
    de inserir comandos SQL o invasor insere scripts no sistema.
*/
function clear($input) {
    global $connect;
    // Proteção contra SQL Injection
    $var = mysqli_escape_string($connect, $input);
    // Proteção contra XSS
    $var = htmlspecialchars($var);
    return $var;
}

    if (isset($_POST['btn-cadastrar'])) {
        $nome = clear($_POST['nome']);
        $sobrenome = clear($_POST['sobrenome']);
        $email = clear($_POST['email']);
        $idade = clear($_POST['idade']);
        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Erro ao cadastrar";
            header('Location: ../index.php');
        }
    }