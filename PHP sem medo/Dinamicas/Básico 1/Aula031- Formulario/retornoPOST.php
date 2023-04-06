<?php if (isset($_POST['nome'])) {
    $nome= $_POST['nome'];
    $email= $_POST['e-mail'];

    echo "Nome:$nome" .'<br>'."E-mail: $email";
};
?>