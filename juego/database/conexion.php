<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'juego';

    $conn = mysqli_connect($server, $user, $pass, $db);

    if ($conn) {
        echo "realizado con exito";
    }
?>