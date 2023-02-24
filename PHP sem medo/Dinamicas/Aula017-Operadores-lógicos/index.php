<!-- Operadores lógicos:
Retornam (true) ou (false), eles tb servem pra comparar duas ou mais expressões e tomam uma decisão lógica.
AND (&&)= compara duas expressões e retorna verdadeiro somente se as duas forem verdadeiras.

OR (||)= retorna verdadeiro se uma das expressões forem verdadeira

!(negação)= esse ficou confuso.
-->
<?php 
$nome = 'João';
$idade = 43;

var_dump($nome == 'João' && $idade == 43); echo '<br>';
var_dump($nome == 'João' AND $idade == 43); echo '<br>';
var_dump($nome == 'João' && $idade < 43); echo '<br>';

var_dump($nome == 'João' || $idade == 43); echo '<br>';
var_dump($nome == 'Jão' || $idade != 43); echo '<br>';

$num = FALSE;
var_dump(!$num)

?>
