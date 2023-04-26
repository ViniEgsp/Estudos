<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5</h1>
    <h2> Ao site - Faça um programa que mostre na tela o que você deseja fazer usando seus conhecimentos de PHP.</h2>
    <?php 
    $objetivo1 = 'Criar soluções para proporcionar maior liberdade do indivíduo.'; 
    $objetivo2 = 'Obter renda pra direcionar para outros projetos';
    $objetivo3 = 'informação particular';
    ?>
    <ul>
        <li>
            <?php echo $objetivo1?>
        </li>
        <li>
            <?php echo $objetivo2?>
        </li>
        <li>
            <?php echo $objetivo3?>
        </li>
    </ul>
   
</body>
</html>