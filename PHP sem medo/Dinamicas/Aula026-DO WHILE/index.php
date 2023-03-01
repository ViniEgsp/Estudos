<!-- Laço de repetição DO WHILE: 
Quase igual o while, mas verifica a condição (TRUE) somente depois de fazer a listagem dos dados, ao contrário do WHILE.
 do {
    # code...
} while ($a <= 10);?> -->

<!-- 
?php 
$a = [1,2,'casa',3,4,'pipoca',5,6];
$b = count($a);
$i = 0;

do {
    echo $a[$i] . '<br>';
    $i++;
} while ($i <= 5);
// 1
// 2
// casa
// 3
// 4
// pipoca
?> -->
<?php 
$a = [1,2,'casa',3,4,'pipoca',5,6];
$b = count($a);
$i = 0;

do {
    echo $a[$i] . '<br>';
    $i++;
} while ($i <= $b);
?>
<!-- Não funcionava por causa do código PHP dentro do comentário  🤷‍♂️. -->
<hr>
<!-- Brake e Continue: -->
<?php 
$lista = [1,2,3,4,5,6,7,8,9,10];

foreach ($lista as $i) {
    echo $i . '<br>';

    if ($i==5) {
        break;
    }
} echo 'encerrado'
?>
<hr>
<?php 
$lista = [1,2,3,4,5,6,7,8,9,10];

foreach ($lista as $i) {
    echo $i . '<br>';

    if ($i == 5) {
        continue;
    }
} echo 'encerrado'
?>