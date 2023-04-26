<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <p> Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.</p>
    <br>
    <?php 
        $v1 = 465;
        $v2 = 293;
        $r1 = $v1 + $v2;
        echo $r1 .'<br>';
    #outra forma de fazer.
        echo $r1 = $v1 + $v2 .'<br>';
        
        echo $r2 = $r1 * $v1 . '<hr>';    
    ?>
    <p>2 – Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado</p><br>

    <?php 
        $v1 = 1;
        $v2 = 2;
        $v3 = 3;
        echo $v1.'-'. $v2.'-'. $v3 .'<br>';
        echo $m1 = $v1 + $v2 + $v3 /2 . '<hr>'
    ?>

    <p>3 – Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.</p><br>

    <?php
        $v1 = 100;
        $v2 = 876;
        echo $v1 *=.15;
        echo "<br>";
        //echo $r1 = $v1 /100 * 15 . '<br>';
        echo $r2 = $v2 /100 * 15 . '<hr>';
        // Pesquisar o operador %.
        //Aceito explicação se vc estiver vendo isso kkkk
    ?>
    <p>4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.</p>
    <?php 
        $v1 = 1000;
        //echo $r1 = $v1 /100 * 5 . '<br>';
        //echo $v1 *=.05;
        echo "<br>";
        //echo "<br>";
        echo $v1 *=.50;
       // echo "<br>";
        //echo $r1 = $v1 /2 . '<hr>';

        // Não deu certo...a segunda operação imprime o resultado da percentagem da primeira operação, não da variável. Puts, será que tem q ser uma constante?

    ?>
    <p>5 – Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.</p><br>
    
    <?php 
        $a = 34;
        $b = 93;
        /*echo $a ."<br>";
        echo $a**2 ."<br>";
        echo "<br>";
        echo $b ."<br>";  
        echo $b**2 ."<br>";
        echo "<br>";*/
        echo $r1 = $a**2 + $b**2 ."<br>"; 
        echo "<hr>";

    ?>
    


</body>
</html>