<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <h2>2. Etiqueta - Elabore um script que escreve seu nome completo na primeira linha, seu endereço na segunda, e o CEP e telefone na terceira.</h2>
    <?php 
    $nome = 'Nome: João';
    $end = 'End: Rua do João, 333, Bairro do João, Joãolandia-JO';
    $cep = 'CEP: 33300-333';  $tel = 'TEL: (033)988889900';

    echo $nome . '<br>'. $end . '<br>' . $cep . '  '. $tel;
    ?>
</body>
</html>