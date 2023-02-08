<?php 
    $nome = "Estudante";
    $sobrenome = "de PHP";
?>
    
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>O meu nome é:</h3>
    <h1><?="$nome $sobrenome" ?></h1>
    <!--Forma 2-->
    <h1><?= $nome .' '. $sobrenome ?></h1> <!--Não sei o q deu errado (faltou espaço kkkk)-->
    <!--Forma 3-->
    <h1><?php echo $nome .' '. $sobrenome ?></h1>
</body>
</html>