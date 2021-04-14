<?php
/*
 * Manipulação de arquivos
 * 
 * fopen()
 * fclose()
 * fwrite()
 * !feof()
 * fgets()
 * filesize
 */

$arquivo = 'arquivo.txt';
$conteudo = "Conteúdo de testes\r\n"; // \r\n é pra pular uma linha
$tamanhoArquivo = filesize($arquivo);
$arquivoAberto = fopen($arquivo, 'r'); // primeiro parâmetro é a variável e o segundo parâmetro é como ele vai ser aberto = (a = escrita)
//fwrite($arquivoAberto, $conteudo);

while (!feof($arquivoAberto)):// enquanto não for o final do arquivo
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha . "<br>";
endwhile;
fclose($arquivoAberto);