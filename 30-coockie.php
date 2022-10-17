<?php 
// $_COOKIE 
/* Arquivo criado pelo servidor no computador 
    do usuário para armazenar algumas informações. 
    o coockie é um simples arquivo de texto
    que pode ser visualizado pelo navegador.
*/
    setcookie('user', 'João da Silva', time()+3600);
    // Remover cookie
    // setcookie('email', 'rodrigosantosweb@gmail.com', time()-3600);
    setcookie('email', 'rodrigosantosweb@gmail.com', time()+3600);
    setcookie('ultima_pesquisa', 'tenis adidas',time()+3600);

    // Exibir ou utilizar esse dado coockie em alguma sessão
    echo $_COOKIE['ultima_pesquisa'];

    // var_dump($_COOKIE);
// Não use coockies para armazenar logins e senhas.
