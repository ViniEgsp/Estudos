<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
    <?php
# 'a' é igual a 1000 e b é igual a metade de 'a'
# apresentar o valor de 'b'
    $a = 1000;
    $b = $a / 2;
    echo $b;
    echo '<br>';
    echo '<hr>';

    echo $c = $a * $b;
    echo '<hr>'; 

    echo $a;
    echo '<br>';
    echo $b;
    echo '<br>';
    echo $c;


?>
<p>As variáveis ​​são "recipientes" para armazenar informações.</p>

<p>Criando (Declarando) Variáveis ​​PHP <br>
No PHP, uma variável começa com o $ sinal, seguido do nome da variável:</p>
<!--https://www.w3schools.com/php/php_variables.asp-->
    <br>
    <a href="/teste/PHP/1Variaveis/000/exer.php">Exercício</a>
</body>
</html>
<!--- Como imprimir na tela WEB (echo)

- Como Atribuir um valor a uma variável (=)
- Como ver o tipo de variável no programa (var_dump)
- Como concatenar Strings (.)
- Qual a diferença das variáveis do tipo int e float


operadores de adição (+), Subtração (-), Divisão (/), Multiplicação (*), Potência (**), Resto (/), Porcentagem (*=), incremento (+=), decremento (-=) e de brinde introduzir na lógica condicional if e no laço de repetição while.
--> <hr>
<h1>Laço de repetição</h1>
<?php 
    $nascimento = 1980;
    $idade = 2023 - $nascimento;

    echo "A idade do cliente é $idade anos" . 
    '<br>';
    if ($idade<18) {
        echo "Infelizmente você não está apto a continuar" . "<br>";
        # code...
    }
    else {
        echo "Vamos lá 'My Dude'!";
        # code...
    }

?> 
<br>
<br> <!--Sei q não é legal fazer isso no HTML, mas...-->

<?php 
    $nascimento = 1980;
    $idade = 2023 - $nascimento;

    echo "A idade do cliente é $idade anos" . 
    '<br>';
    if ($idade>18) {
        echo "Infelizmente você não está apto a continuar" . "<br>";
        # code ...
    }
    else {
        echo "Vamos lá 'My Dude'!";
        # code...
    }
 //Tb dá pra imprimir a "autorização" sem imprimir a $idade do cliente.
?>
