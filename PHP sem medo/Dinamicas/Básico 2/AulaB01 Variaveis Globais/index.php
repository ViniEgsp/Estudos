<!-- Variáveis Globais: -->


<?php 
// $GLOBALS['______'] = $______ ;

$nome= 'João';
echo $nome . '<br>';

function segredo($variavel_oculta){
    $variavel_oculta= 'Algo secreto';
    $GLOBALS['variavel_oculta'] = $variavel_oculta;
    
};
segredo($variavel_oculta);
echo $variavel_oculta;

echo '<hr>';
// $_SERVER['_______'];

// print_r($_SERVER); //*exemplo testado

foreach ($_SERVER as $key => $value) {
    echo $key.'<br>'.$value.'<br><br>';
};
// echo $_SERVER['SERVER_NAME']; //*exemplo testado


echo '<hr>';


?>