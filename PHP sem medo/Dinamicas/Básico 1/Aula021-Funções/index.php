<!-- Funções:
Blocos de códigos usados para reaproveitar uma parte do código em qualquer parte do código que seja preciso.

function nomeDaFuncao($var1,$var2){
    echo "resultado $var1 e resultado $var2"
}

nomeDaFuncao () -->
<?php 


function sacar($saldo, $valorSacar){
    if ($saldo > $valorSacar) {
        return "Processando saque $valorSacar";
    }
    return "Você não tem saldo suficiente.";
    }

echo sacar(1000, 1500);
echo '<br>';
echo sacar(10500, 1500);
echo '<br>';
echo sacar(NULL, 1500);

?>