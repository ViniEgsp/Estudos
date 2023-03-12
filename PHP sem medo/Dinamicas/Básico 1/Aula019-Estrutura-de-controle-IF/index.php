<!-- Estrutura de controle IF:
if($var = valor){
    echo 'resultado SE for'
}else{
    echo 'Resultado SE NÃO for'
}

if($var = valor){
    echo 'resultado SE for'
}elseif($var == valor){
    echo 'Resultado SE NÃO for 1 MAS for 2'
}else{
    echo 'Resultado SE NÃO for'
} -->
<?php 
$valorSacar = 1000;
$saldoBanco = 100000;

if ($valorSacar > $saldoBanco) {
    echo 'Seu Saldo é insuficiente.' .$valorSacar;
}elseif ($valorSacar == $saldoBanco) {
    echo 'Você está tentando sacar '.$saldoBanco.', tem certeza que deseja retirar todo seu saldo?';
}else {
    echo "Seu saque está em andamento.";
}
echo '<hr>';

$valorsacar = 100000;


if ($valorsacar > $saldoBanco) {
    echo 'Seu Saldo é insuficiente.' .$valorsacar;
}elseif ($valorsacar == $saldoBanco) {
    echo 'Você está tentando sacar '.$saldoBanco.', tem certeza que deseja retirar todo seu saldo?';
}else {
    echo "Seu saque está em andamento.";
}
echo '<hr>';

$valorsacar = 100001;

if ($valorsacar > $saldoBanco) {
    echo 'Seu Saldo é insuficiente.' .$saldoBanco;
}elseif ($valorsacar == $saldoBanco) {
    echo 'Você está tentando sacar '.$saldoBanco.', tem certeza que deseja retirar todo seu saldo?';
}else {
    echo "Seu saque está em andamento.";
}echo '<hr>';

$valorSacar = 1000;
$senha = 1234;

if (($valorSacar > $saldoBanco) && ($senha == 1234)) {
    echo 'Seu Saldo é insuficiente.' .$valorSacar;
}else {
    echo "Seu saque está em andamento.";
}
echo '<hr>';

?>