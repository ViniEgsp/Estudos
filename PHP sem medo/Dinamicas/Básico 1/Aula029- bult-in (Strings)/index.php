<?php 
$frase = 'Testando a mudança de palavras.';
/* Substituir a palavra 'mudança'*/
$subsfrase = str_replace('mudança','substituição',$frase);
echo $subsfrase;
echo '<hr>';

$caracfrase = strlen($frase);

$outrafrase = substr($frase,0,19);
echo $outrafrase;
?>