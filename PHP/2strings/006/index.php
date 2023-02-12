<?php 
    $nome = "Estudante";
    $sobrenome = "de PHP";
    // Concatenar strings
    $nome_completo = "$nome $sobrenome"
    // usar strlen pra contar os caracteres
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>O meu nome é <?= " $nome $sobrenome "?></p>
    <p><?= "O meu nome tem " . strlen($nome_completo) . " caracteres." ?></p>
    <!-- Em caso de erro na contagem devido ao uso de caracteres acentuados, usar a string "mb_strlen"-->
</body>
</html>