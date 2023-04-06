<?php 
session_name('User');
session_start();
$_SESSION['User'] = 'Usuário 1';
    
// fucionou mais ou menos

echo $_SESSION['User'];
?>