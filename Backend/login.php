<?php

    require_once "conexion.php";


    if (isset($_POST['boton_ingreso'])) {
        $username = $_POST['nombre'];
        $contrasenna = md5($_POST['ingresoPassword']);
        
        $sql = "SELECT * FROM jugadores WHERE username_jugador='$username' AND password_jugador='$contrasenna'";
        $result = mysqli_query($conn, $sql);
        
        if ($result->num_rows>0) {
            echo '<script language="javascript">alert("Inicio de sesion correcto");window.location.href="../frontend/paginas/index.php"</script>';
        }else {
            echo '<script language="javascript">alert("Usuario y/o contraseña incorrectos");window.location.href="../frontend/paginas/ingreso.php"</script>';
        }
    }
?>