<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("Menu.inc.php")?>
    <h1>Arrays</h1>
    <h2>O que é uma Array?</h2>
    <p>Uma array é uma variável especial, que pode conter mais de um valor por vez.

Se você tiver uma lista de itens (uma lista de nomes de carros, por exemplo), armazenar os carros em variáveis ​​únicas pode ser assim:</p>
<p>$cars1 = "Volvo";<br>
$cars2 = "BMW";<br>
$cars3 = "Toyota";</p><br>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<h2>Criar uma array em PHP</h2>
<p>Em PHP, a função array() é usada para criar um array:</p>
 <p>array();</p>
 <p>No PHP, existem três tipos de arrays:</p>
    <ol>
        <li><b>Arrays indexados</b> - Arrays com um índice numérico</li>
        <li><b>Arrays associativos</b> - Arrays com chaves nomeadas</li>
        <li><b>Arrays multidimensionais</b> - Arrays contendo um ou mais arrays</li>
    </ol>
    <p>The count() function is used to return the length (the number of elements) of an array:</p>
    <?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
</body>
</html>
