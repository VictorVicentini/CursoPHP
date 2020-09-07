<?php

$arquivo = 'arquivo.txt';

$conteudo = "conteudo de teste\r\n";

$tamanho_arquivo = filesize($arquivo);

$arquivo_aberto= fopen($arquivo,'a');
//escrevendo no arquivo
//fwrite($arquivo_aberto,$conteudo);
//fclose($arquivo_aberto);

//lendo conteudo do arquivo
$arquivo_aberto= fopen($arquivo,'r');
while(!feof($arquivo_aberto)):
    $linha = fgets($arquivo_aberto,$tamanho_arquivo);
    echo $linha;

endwhile;
