
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Campos</title>
</head>
<body>
    <?php $coisas = ['Item 1','Item 2','Item 3'];?>

    <form action="retorno.php" method="POST">

        <label>Coisas</label>
        <!-- Caixa de seleção (Itens) -->
        <select name="coisas">
            <?php foreach($coisas as $item): ?>
            <option><?php echo $item; ?></option>
            <?php endforeach;?>
        </select>
        <br>
        <input type="checkbox" name="Item checkbox 1"> CheckBox 1 <br>
        <input type="checkbox" name="Item checkbox 2"> CheckBox 2 <br>
        <input type="checkbox" name="Item checkbox 3"> CheckBox 3 <br>
        <!-- "Radio" com mesmo 'name' não pode ser selecionado ao mesmo tempo (se usa o "value") -->
        <input type="radio" name="Item radio" value="Opção 1"> Opção 1 <br>
        <input type="radio" name="Item radio" value="Opção 2"> Opção 2 <br>
        <input type="radio" name="Item radio" value="Opção 3"> Opção 3 <br>

        <input type="submit" value="Cadastrar">         
    </form>
    

</body>
</html>