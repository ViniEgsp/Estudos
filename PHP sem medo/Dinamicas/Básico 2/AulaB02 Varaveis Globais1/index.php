<!-- Requisição HTTP 

https://developer.mozilla.org/pt-BR/docs/Web/HTTP/methods 

O método GET solicita a representação de um recurso específico. Requisições utilizando o método GET devem retornar apenas dados.
(https://www.php.net/manual/pt_BR/reserved.variables.get.php)

-->
<!-- < ?php
// $_GET

$nome= $_GET['produto'];
$preco= $_GET['preco'];
$moeda= $_GET['moeda'];

// $nome= addslashes($_GET['produto']) ;
// $preco=addslashes( $_GET['preco']);
// $moeda=addslashes($_GET['moeda']);
// addslashes() é usado pra proteger de ataques

echo " O produto $nome custa $preco $moeda." ;
/*
http://localhost/teste/PHP%20sem%20medo/Dinamicas/Básico%202/AulaB02%20Varaveis%20Globais1/?produto=casa&preco=1,32&moeda=BTC 
*Chamado na URL*
*/
echo '<hr>';

// $_POST

?> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="container">

<h1>Contatos</h1>

<form action="" method="POST">

    <label>Nome:</label>
    <input type="text " name="nome" placeholder="Digite seu Nome" class="form-control">

    <label>Assunto:</label>
    <input type="text" name="assunto" placeholder="digite o assunto"
    class="form-control">

    <label>Mensagem:</label>
    <textarea name="mensagem" placeholder="digite a mensagem" class="form-control"></textarea>

    <input type="submit" nome="submit" value="enviar" class="btn btn-success" >

</form>

<?php 

if (isset($_POST['submit'])){   
$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

echo "NOME: $nome";
echo "ASSUNTO: $assunto";
echo "MENSAGEM: $mensagem";
}

?>
</div>



