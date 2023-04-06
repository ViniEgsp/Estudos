<?php 
// $arquivo = fopen('arquivos/log.txt','w');
// $texto = "User logou no sistema as 10:00\n";
// $texto2 = "User logou no sistema as 11:00\n";
// fwrite($arquivo,$texto);
// fwrite($arquivo,$texto2);
// fclose($arquivo);

// $arquivo = fopen('arquivos/log2.txt','a');
// $texto = "User logou no sistema as 10:00\n";
// $texto2 = "User logou no sistema as 11:00\n";
// fwrite($arquivo,$texto2);
// fclose($arquivo);

if (is_file('arquivos/log.txt')) {
    $conteudolog = file_get_contents('arquivos/log.txt');
    echo nl2br($conteudolog);
}
?>