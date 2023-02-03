<?php include 'funcoes.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sintaxe do PHP com o HTML</title>
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
        <?php foreach($dadosdapessoa as $pessoa): ?>
            <tr>
                <td>Vini</td>
                <td>falecom@ovini.com.br</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        
    </table>
</body>
</html>