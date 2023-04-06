<?php if (isset($_GET['nome'])) {
    $nome= $_GET['nome'];
    $email= $_GET['e-mail'];

    echo "Nome:$nome" .'<br>'."E-mail: $email";
};
?>