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


Operadores de adição (+), Subtração (-), Divisão (/), Multiplicação (*), Potência (**), Resto (/), Porcentagem (*=), incremento (+=), decremento (-=) e de brinde introduzir na lógica condicional if e no laço de repetição while.
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
    $nascimento = 2009;
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
 
    echo "<br>";

    $aposentadoria = $idade + 35;
    echo " Se o cliente começar a trabalhar com  $idade anos, ele se aposentará com $aposentadoria" ."<br>";

    $trabalhador = "Pedro";
    $HA = 12;
    $salario = 30 * $HA;
    echo "O salário do $trabalhador, equivale a $salario Dl." . "<br>";

    $renda = $salario/4;
    echo "A renda por pessoa da família é de $renda Dl." . "<br>";

    $troco = $renda %19; //operador de resto!
    echo "O resto da compra foi $troco Dl." . "<br>";

    $aposta = $troco **2;
    echo "Ganhou a aposta e levou $aposta pra casa" . "<br>";
    // Operadores especiais:
    // O Operador *=. retorna a percentagem 
    $premioreal = $aposta*=.60;
    echo "Só agora eu fui saber q houve imposto, depois desse assalto, o valor do prêmio é de $premioreal Dl" . "<br>"; 
    $saldo = $premioreal;
    $saldo += 10;
    echo "Seu saldo é $saldo" . "<br>";
    // Abrindo repetição ... Vai ficar em loop até que seja especificado
    while ($saldo <= 700) {
        $saldo += 100;
        echo "Seu saldo é $saldo" . "<br>";
        # code...
    }
    echo "SEU OBJETIVO FOI ALCANÇADO" . "<br>";

    $a = 50;
    $b = 35;

    if ($a<$b) {
        echo "-1";
    }
    if ($a==$b) {
        echo "0";
    }
    if ($a>$b) {
        echo "1";
    }
    var_dump($a <=> $b)
?>
<!--CONTINUAÇÃO COM OPERADORES MATEMÁTICOS
Nesta aula trabalhamos com alguns operadores especiais como o teste se a variável é menor, igual ou maior que o resultado, verificamos se o valor é NULL, também aprendemos a lógica && (and) e || (or) para mostarmos em nossa programação uma tabela verdade condicional e por fim aprendemos o incremento unitário em PHP.-->
<h1>variável NULL</h1>
<!-- Preciso dar uma revisada em INCREMENTO-->
<?php 
    $x = NULL;
    $y = 20;
    $z = NULL;
    echo $x ?? $y ?? $z;
    // O que é  ??  entre as variáveis?
    
    echo "<br>";

    echo $y++ ."<br>";
    echo $y ."<br>";

    $resultado = 10 + 3/2;
    echo $resultado ."<br>";

    $resultado = 10 + 3/2 - 5*3**2 ."<br>";
    echo $resultado ."<br>";
    echo "<hr>";
    $f = 1;
    $g = 1;
    $h = 0;
    // E (se for tudo correto, retorna "verdade")
    if ($f==1 && $g==1 && $h==1) {
        echo "Verdade ";    
    }
    else {
        echo "mentira ";
    }
    echo "<br>";
    // OU (se um for correto, retorna verdade)
    if ($f==1 || $g==1 || $h==1) {
        echo "Verdade ";    
    }
    else {
        echo "mentira ";
    }
?>
<hr>
<br>
<h1>Funções</h1>
<!--Função usadas no PHP são trechos do código que pode ser chamado, solicitado, requisitado de qualquer parte do código para executar uma função, ou seja uma tarefa qualquer e retornar um valor para o código, você pode chamar uma função quantas vezes forem necessárias dentro do seu código ou até de outro código, como iremos aprender na AULA 05. Na chamada da função podemos passar zero ou mais parâmetros para esta função, e poderá retornar apenas um valor. Lembrando que quando chamamos uma função o código PHP para para executar aquela função que a chama. Ou seja, o código para, e espera o retorno da função para dar prosseguimento novamente.-->
<?php 
function somar($a, $b){
    return $a+ $b;
}
function sub($a, $b){
    return $a- $b;
}
    /*$a=10;
    $b=20;
    echo $a+$b;*/
    echo somar(10, 34);
    echo '<br>';

    $resultado= sub(10, 45);
    echo "$resultado" . "<br>";

    echo somar(145, 65) . "<br>";
    /*O exemplo parece ser desperdício de energia por ser simples, mas se aplica a casos mais complexos,onde as "formulas" podem ser armazenadas na função, e não precisem ser escritas o tempo todo.*/
?>
<hr>
<h1>Include</h1>
<!-- Os arquivos são incluídos baseando-se no caminho do arquivo informado ou, se não informado, o include_path especificado. Se o arquivo não for encontrado no include_path, a declaração include checará no diretório do script que o executa e no diretório de trabalho corrente, antes de falhar. O construtor include emitirá um aviso se não localizar o arquivo; possui um comportamento diferente do construtor require, que emitirá um erro fatal.


Se um caminho for definido — seja absoluto (iniciando com a letra do drive ou \ no Windows, ou / no Unix/Linux ), ou relativo ao diretório atual (começando com . ou ..) — o include_path será completamente ignorado. Por exemplo, se o nome do arquivo iniciar com ../, o interpretador irá procurar pelo arquivo no diretório pai-->
<?php
function soma($a, $b){
    return $a+ $b;
}
function subt($a, $b){
    return $a- $b;
}

function  div($a, $b){
    return $a/$b;
}
function mult($a, $b){
    return $a*$b;
}

?>



