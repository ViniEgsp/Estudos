<!-- Includes e Requires:
São instruções q servem pra incluir um arquivo em outro arquivo. 
-->
<?php require "functions/function.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "includes/headers.php";?>
    <h1>Conteúdo html</h1>
    <?php include "includes/footer.php"?>
</body>
<hr>
<body>
    <?php require "includes/headers.php";?>
    <h1>Conteúdo html</h1>
    <?php echo nome("João");?>
    <br>
    <?php require "includes/footer.php";?>
</body>
</html>
<!-- AAAhhh!!! Agora eu entendi!!!! -->