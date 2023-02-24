<?php //Strings: sequência de caracteres... pode ser usado pra incluir qualquer dado no código. 

$curso = 'PHP sem medo';//Aspas simples.
$curso1= "PHP Sem Medo";//Aspas duplas.
/*Existe diferença entre as aspas, as aspas duplas são "mais inteligentes"*/

echo $curso . '<br>';
echo $curso1 . '<br>';

$simples = 'diferença das \'aspas\'. Posso chamar uma variável assim: '.$curso.'. Mas não assim $curso ';
echo $simples. '<br>';
$duplas = "Diferença das \"aspas\" . Posso chamar uma variável assim: $curso1". '<br>';
echo $duplas;
// Uma \(barra invertida) faz com q as aspas apareçam no texto.
?>