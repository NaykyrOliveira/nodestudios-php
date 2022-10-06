<?php
/*
$_GET coletar dados de formulários (as informações são enviadas através de paramêtros de URL)
dessa forma eles ficam visivéis para todos na URL.
(Jamais confiar nos dados passdo pelo usuário)
*/ 
    /* $nome = $_GET['nome'];
    $email = $_GET['email'];

    echo "Seu nome é $nome e seu email é $email. <br>"; */
    echo $_GET['idade']."<br>".$_GET['sobrenome'];
    var_dump($_GET);