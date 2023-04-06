<?php 
if(isset($_POST)){
    $nome = $_FILES['arquivo']['name'];
    $temp = $_FILES['arquivo']['tmp_name'];
    $tipo = $_FILES['arquivo']['type'];

    /*if ($tipo == 'image/png') {
        move_uploaded_file($temp,'arquivos/'.$nome);
    }*/

    $extensoesAceitas = ['png','jpeg','jpg'];
    $extensao = pathinfo($nome,PATHINFO_EXTENSION);

    if (in_array($extensao,$extensoesAceitas)) {
        if (move_uploaded_file($temp,'arquivos/'.uniqid().'.'.$extensao)); {
            echo 'Upload concluido';
        }
    }else {
        echo'Arquivo não suportado.';
    }
}
?>