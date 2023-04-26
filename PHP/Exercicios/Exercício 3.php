<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 3</h1>
    <h2>3. Letra de música - Faça um script que mostre na tela uma letra de música que você gosta (proibido letras do Justin Bieber).</h2>
    <?php 
    if (is_file('music.txt')) {
        $music = file_get_contents('music.txt');
        echo nl2br($music);        
    }
    ?>
    <!-- Há! fiz sozinho! -->
</body>
</html>