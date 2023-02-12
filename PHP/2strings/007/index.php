<?php 
    $nome = "estudãnte";
    $snome = "de php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= "O meu nome é " . strtoupper($nome) . " e meu sobrenome é " . strtoupper($snome) ?></p>
    <p><?= "O meu nome é " . mb_strtoupper($nome) . " e meu sobrenome é " . mb_strtoupper($snome) ?></p>
    <!--Caso os caracteres acentuados não se comportarem como esperado, usar a str "mb_strtoupper"-->
</body>
</html>