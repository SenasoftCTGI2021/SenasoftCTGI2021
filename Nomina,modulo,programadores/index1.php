<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="contenedor">

        <form action= "" method="post">
            <button type="submit" id="btn1" name="btn1" class="btn" onclick="">Elegir cartas</button>
            <img id="juan" src="img/Programadores/Antonio.png"> </img>






    </div>







    <!--*****************************FINCODIGOO*******************************************-->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/aleatorio.js"></script>
    <script src="js/cartas.js"></script>
</body>

</html>
<?php
if (isset($_POST['btn1'])) {
    $a = array("juan - programador", "Pedro - programador", "Carlos - programador", "Juanita - programadora", "Antonio - programador", "Carolina - programadora", "Manuel - programador","Nómina - modulo", "Facturación - modulo", "Recibos - modulo", "Comprobante contable - modulo", "Usuarios - modulo", "Contabilidad - modulo","404 - error", "Stack overflow - error", "Memory out of range - error", "Null pointer - error", "Syntax error", "Encoding - error");
        $programador= array_rand($a,4);
        echo $a[$programador[0]]."<br>";
        echo $a[$programador[1]]."<br>";
        echo $a[$programador[2]]."<br>";
        echo $a[$programador[3]];
    


        
}
?>