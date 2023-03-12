 <!-- Laço de repetiçãp FOR:
 for ($i=0; $i < ; $i++) { 
    # code...
 }
 Simplificação do While -->

 <?php 
 for ($i=0; /*Variavel*/ $i < 1;/* condição de parada*/ $i++ /*  incremento ou decremento*/) { 
    echo $i . '<br>';
 }
 ?>
 <hr>
 <?php 
 for ($i=1; $i <= 5; $i++) { 
    echo $i . '<br>';
 }
  echo "Deu a quantidade e saiu fora do laço!"
 ?>
 <hr>
<?php 
$lista1 = ['a', 'b' ,'c', 1, 2, 3];
for ($i=count($lista1)-1; $i >=0 ; $i--) { 
   echo $lista1[$i].'<br>';
}

?>
<hr>
<?php 
  $lista = ['a', 'b' ,'c', 1, 2, 3];
  $nlista = count($lista);

  for ($i = 0; $i < $nlista; $i++){ 
   echo $lista[$i]. '<br>';
 }
//  echo "Não deu certo, não sei o motivo! "
 ?>
 
 