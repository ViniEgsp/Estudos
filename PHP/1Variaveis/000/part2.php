<?php 
    $nome= "João sei não";
    echo "$nome <br>";

    echo strtoupper($nome) . "<br>"; 
    echo strtolower($nome) . "<br>";//Cadastro email
    echo ucwords($nome) . "<br>"; //upper case words
    echo ucfirst($nome) . "<br>"; //upper word parágrafo
    echo str_replace("o", "0", $nome) . "<br>";
    
    $frase = "Estamos caminhando para uma drástica mudança.";//encontrar palavra na frase pra trabalhar ela
    $pos = strrpos($frase, "drástica");
    var_dump($pos);
    echo "<hr>";

    $texto1 = substr($frase, 0, $pos);
    echo "$texto1 <br>";
    $texto2 = substr($frase, $pos);
    echo "$texto2 <br>";
    $nome = "drástica";
    echo strlen($nome) . "<br>";
    $texto3 = substr($frase, $pos+strlen($nome));
    echo "$texto3 <br>";
    $novaFrase = "$texto1 grande $texto3";
    echo $novaFrase;

?>