<?php
// Superglobais variáveis pré-definidas do PHP (sempre acesseiveis independente do escopo).
// $GLOBALS acessa variáveis de qualquer lugar do script PHP.
    $x = 10;
    $y = 15;

    function soma() {
        echo $GLOBALS['x'] + $GLOBALS['y'];
    }

    soma();
    echo "<hr>";
// $_SERVER contem informações sobre cabeçalhos, caminhos e locais de script.
    echo $_SERVER['PHP_SELF']."<br>";
// retorna o nome do arquivo do script que está sendo executado.
    echo $_SERVER['SERVER_NAME']."<br>";
// retorna o nome do host do servidor onde o script está sendo executado.
    echo $_SERVER['SCRIPT_FILENAME']."<br>";
// retorna o caminho absoluto do script em execução.
    echo $_SERVER['DOCUMENT_ROOT']."<br>";
// retorna o diretório raiz do script em execução.
    echo $_SERVER['SERVER_PORT']."<br>";
// retorna a porta do servidor web.
    echo $_SERVER['REMOTE_ADDR']."<br>";
// retorna o endereço IP de onde o usuário está visualizando a página.
    echo "<hr>";
// $_REQUEST
// $_ENV
// $_COOKIE
// $_SESSION
