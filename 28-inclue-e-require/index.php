<?php 
/* Funções que serve para inserir um conteúdo de um arquivo PHP
 em outro arquivo PHP em execução */ 
// include_once verifica se o arquivo já foi incluido se não inserir o _once ele inclui duas vezes
    // include_once 'header.php' 
    include 'header.php';
// Retorna um Warning (aviso que houve falha ao abrir o arquivo) mas não interrompe o script
?>
<?php
    echo "Olá pessoal"; 
?>
<?php
// Se tentar inserir um arquivo e não conseguir ele retorna um erro (parando o script)
    // require 'footerx.php';
    require 'footer.php';
// require_once verifica se o arquivo já foi incluido se não inserir o _once ele inclui duas vezes
    // require_once 'footer.php' 
?>

