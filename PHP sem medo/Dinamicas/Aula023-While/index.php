<!-- Loopings(laços de repetição):
While (enquanto)
Servem pra repetir determinado numeros de vezes uma determinada instrução, por exemplo, os dados de uma array, ou resultado de banco de dados.
 -->
<!-- <?php 
 $a = 0;

 while ($a <= 110) {
    echo $a. '<br>';
    $a++ ;
 }
?>  -->
<?php 
$cursos = ['html', 'css', 'php'];
$nCursos= count($cursos);
$i = 0;

while ($i< $nCursos) {
    echo $cursos[$i]. '<br>';
    $i++;
}
?>