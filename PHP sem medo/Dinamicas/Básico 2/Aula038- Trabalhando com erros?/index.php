<?php


require 'functions/function.php';
ini_set('display_errors',1);



$nome = 'Pedro';

if ($nome != 'Jonas') {
    trigger_error('O nome é diferente de "Jonas"', E_USER_NOTICE);/* deixar trigger sem segundo parametro */
}
// try {
//     curso('laravel');

// } catch (Exception $e) {
//     echo 'Erro na linha'. $e->getLine();
// }

?>