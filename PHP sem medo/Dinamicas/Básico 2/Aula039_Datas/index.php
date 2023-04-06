<?php
// date_default_timezone_set('America/Sao_Paulo');

// echo date('d/m/Y H:i:s'), '<br>';

// echo date('d/m/Y', strtotime('+4days'));
#################################################

/*$data = '2023-4-6';
echo date('d/m/Y', strtotime($data));*/
#################################################

/*$dataHj = strtotime(date('Y-m-d'));
$databanco = strtotime('2024-06-2');

if ($dataHj > $databanco) {
    echo 'Data de hoje é maior';
}else {
    echo'data de hoje não é maior q data do banco.';
}*/
################################################

/*$data1 = new DateTime('2023-4-6');
$data2 = new DateTime('2023-6-4');

$diferencadias = $data1->diff($data2);
echo $diferencadias -> format('%R%a dias');*/
###########################################

/*$data1 = new DateTime('now');
$data2 = new DateTime('tomorrow +1days');

$diferencadias = $data1->diff($data2);
echo $diferencadias -> format('%R%a dias');*/
############################################

/*$data1 = new DateTime('now');
$data2 = new DateTime('2023-6-4');

var_dump($data1 < $data2)*/
##########################################

/*$data = new DateTime('2023-6-4');
$data -> add(new DateInterval('P1Y'));
// combinações de datas no site do php

var_dump($data -> format('d/m/Y'));*/
#############################################

$data = new DateTime('2023-6-4');
$data -> modify('+2 month');
echo $data -> format('d/m/Y');

?>