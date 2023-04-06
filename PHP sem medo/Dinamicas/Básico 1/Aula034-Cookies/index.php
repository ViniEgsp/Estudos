<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>
    <?php 
    $encrypt = base64_encode('Cookie');/*criptografando*/
    setcookie('Item',$encrypt,time()+3600);
    // setcookie('Item',$encrypt,time(),0);
    // setcookie('Item',$encrypt,time(),1);
        #unset($_COOKIE['Item']);
    echo base64_decode($_COOKIE['Item']);/*decriptografando*/
    ?>
</body>
</html>