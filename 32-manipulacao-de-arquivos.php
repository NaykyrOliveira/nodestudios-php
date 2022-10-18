<?php
// Manipulação de Arquivos
    $arquivo = 'arquivo.txt';
    $conteudo = "Conteudo de teste\r\n"; // Para pular uma linha
// filesize 
    $tamanhoArquivo = filesize($arquivo);
// fopen()
    // $arquivoAberto = fopen($arquivo,'a'); Somente para escrita
    $arquivoAberto = fopen($arquivo,'r'); // Somente para leitura

// fwrite()
    // fwrite($arquivoAberto, $conteudo);

// !feof()
    while(!feof($arquivoAberto)) {
// fgets()
        $linha = fgets($arquivoAberto, $tamanhoArquivo);
        echo $linha."<br>";
    }

// fclose()
    fclose($arquivoAberto);