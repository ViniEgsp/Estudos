<!-- Estrutura de controle SWITCH (mudar):
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
} -->
<?php
$valorSacar = 1000;

switch ($valorSacar) {
    case 10000:
        echo "saldo insuficiente!";
        break;

    case 1000:
        echo "Seu saque está em andemento!";
        break;
    
    default:
        echo 'Obrigado pela visita';
        break;
}
echo '<hr>';

switch (TRUE) {
    case ($valorSacar>100):
        echo "saldo insuficiente!";
        break;
        
    case ($valorSacar=1000):
        echo "Seu saque está em andemento!";
        break;
    
    default:
        echo 'Obrigado pela visita';
        break;
}echo '<hr>';

switch (TRUE) {
   case ($valorSacar ==145); 
        echo "saldo insuficiente!";
        break;
        
    case ($valorSacar == 388);
        echo "Seu saque está em andemento!";
        break;
    
    default:
        echo 'Obrigado pela visita';
        break;
}echo '<hr>'; 
// o igual é assim ( == ) não esquecer
?>