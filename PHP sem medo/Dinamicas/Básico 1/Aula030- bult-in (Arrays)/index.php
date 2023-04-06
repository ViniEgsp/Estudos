<?php 

$nomes = [3=>'Job,',5=>'tomas,',1=>'Pedro,',4=>'Matheus,',2=>'Thiago,'];
// $indice = array_keys($nomes);

ksort($nomes);

print_r($nomes);

echo '<hr>';

$nomes = [3=>'Job,',5=>'tomas,',6=>'tomas,',1=>'Pedro,',4=>'Matheus,',2=>'Thiago,'];

$novoaray = array_unique($nomes);
ksort($novoaray);

print_r($novoaray);

echo '<hr>';

?>