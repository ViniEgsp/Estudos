<!-- Laço de repetição FOREACH:
 <?php foreach ($variable as $key => $value) {
    # code...
 }?> -->

 <!-- <?php 
 $lista = [1,2,3,4,5 ];

 foreach ($lista as $item) {
    echo "o valor é $item" . '<br>';
 }
 ?> -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php $listacompras = ['Arroz', 'Feijão', 'macarrão', 'açucar', 'café'];?>
    <h1>Lista de compras:</h1>
    <ul>
        <?php foreach ($listacompras as $i):?>
            <li><?=$i?></li>
            <?php endforeach?>
    </ul>
 </body>
 </html>