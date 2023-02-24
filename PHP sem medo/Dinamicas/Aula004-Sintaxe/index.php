<?php include 'funcoes.php';?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe do PHP com HTML</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
            </tr>            
        </thead>
        <tbody>
        <?php foreach ($variable as $key): ?>
            <tr>
                <td><?php echo $key->nome; ?></td>
                <td><?php echo $key->email; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>