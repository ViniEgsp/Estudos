<!-- Fopen:
https://www.php.net/manual/pt_BR/function.fopen.php  -->

<?php 
// Lendo arquivos
// $arquivo = fopen('texto.txt','r');
/* $variavelponteiro = fopen('endereço\\do\\arquivo.txt', 'modoDEmanipulação'); 

olhar modos na documentação

fgets — Lê uma linha de um ponteiro de arquivo
*/

// while (($linha = fgets($arquivo, 4096)) !== false) {
//     echo $linha .'<br>';
// }
// ?>

<hr>
<!-- 
File:
https://www.php.net/manual/pt_BR/function.file.php
 -->


<!-- < ?php 
$file= file('file.txt');

foreach ($file as $linha) {
    echo $linha.'<br>';
}
# Lê arquivos como 'array' 
echo '<br>';

# file_get_contents
$texto = file_get_contents('texto.txt');
echo $texto.'<br>'
# Lê arquivos como 'strings'
?>
<hr> -->
<!-- Fopen tem maior controle do tamanho do arquivo q o File -->

<!-- fwrite: -->
<?php 

#  lendo arquivos => file para array
// $arquivo = fopen('texto.txt','r');
$arquivo = file('texto.txt'); 

//# gravar
$gravar = fopen('primeira_palavra.txt', 'w');






    foreach ($arquivo as $linha) {   
        $palavra = explode(' ', $linha);#quebra em palavras
        $primeira_palavra = $palavra[0];#primeira palavra
        fwrite($gravar, $primeira_palavra); # gravar o arquivo
    }
fclose($gravar);

$gravar = fopen('primeira_palavra.txt', 'a+');

fwrite($gravar,"\n");

    foreach ($arquivo as $linha) {   
        $palavra = explode(' ', $linha);#quebra em palavras
        $ultima_palavra = $palavra[count($palavra)-1];#ultima palavra
        $ultima_palavra = str_replace(".\n",'', $ultima_palavra);
        $ultima_palavra = str_replace(".",'', $ultima_palavra);
        fwrite($gravar, $ultima_palavra); # gravar o arquivo
    }
    // while (($linha = fgets($arquivo, 4096)) !== false) {
    //     // echo $linha .'<br>';
    // $palavra = explode(' ', $linha);
    // print_r($palavra);
    // $primeira_palavra = $palavra[0/*count($palavra)-1*/];
    // echo $primeira_palavra. '<br>';
    # gravar o arquivo
    // fwrite($gravar, $primeira_palavra);    
    // exit();
//}
fclose($gravar);
?>