<?php 
function curso($nCurso){
    if ($nCurso != 'php') {
        throw new Exception("O nome do curso não é php");
    }
}
?>