<!-- Operadores de comparação:
==              !=
===             >
<               <=>
-->
<?php 
$num = 300;
$num1 = 550;
$num2 = '300';
$num3 = 550;

var_dump($num == $num1);
echo '<br>';
var_dump($num != $num1);
echo '<br>';
var_dump($num3 === $num1);
echo '<br>';
var_dump($num2 === $num1);
echo '<br>';
var_dump($num > $num1);
echo '<br>';
var_dump($num < $num1);
echo '<br>';
?>