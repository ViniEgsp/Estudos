
<?php
 /* Numeros:
 Inteiros: 12 20 30 100 200 55 34 etc. 
 Float:13.4, 200.45, 30.32, 1000.32 ect.  
 */ 
$numInt = 10;
$numflo = 10.00;
$numstr = '1';
$numarr = ['1', '43', 125 , 21.6];
echo gettype($numInt).'<br>'; //gettype pra identificar o tipo
echo gettype($numflo).'<br>';
echo gettype($numstr).'<br>';

var_dump($numInt).'<br>';
var_dump($numstr).'<br>';
var_dump($numarr).'<br>';

?>