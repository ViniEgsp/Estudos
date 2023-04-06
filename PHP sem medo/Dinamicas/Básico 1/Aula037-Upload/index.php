<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>
<body>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <label>Arquivo</label>
        <input type="file" name="arquivo"> 
        <input type="submit" value="Upload de arquivo">
    </form>
</body>
</html>