<?php session_start();
require 'Functions/Function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do usuario</title>
</head>
<body>
    <?php 
    
    // if (isset($_SESSION['logado'])) {
    //     echo 'Bem vindo!';
    // }
    // if (logado()) {
    //     echo 'Bemvindo';
    // }else {
    //     echo 'Você precisa estar logado';
    // }
    echo (logado()) ? 'Area do usuario' : 'Você não pode acessar'; /*if simplificado*/
    ?>
    
</body>
</html>