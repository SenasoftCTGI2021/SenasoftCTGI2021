<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align ="center">
    <p>Presiona el botón para generar un código hexadecimal</p>
    <form action="index.php" method="post">
        <p>Ingrese su nombre</p>
        <input type="text" name="nombre"><br>
    <button type="submit" name="boton">Enviar</button>
</form></div>
</body>
</html>

<?php 

    if (isset($_POST['boton'])){
    $n = substr(md5(Rand()), 0, 6);
    echo $n;
    }

    
    

?>