<?php

    include_once "conexion.php";

    if (isset($_POST['boton_registrar'])) {
        $username = $_POST['registroNombre'];
        $correo = $_POST['registroEmail'];
        $contrasenna = $_POST['registroPassword'];
        $vcontrasenna = $_POST['sPassword'];
        if ($contrasenna == $vcontrasenna) {
            $passencript = md5($contrasenna);
            $sql = "INSERT INTO jugadores(username_jugador, password_jugador, correo_jugador) VALUES ('$username', '$passencript', '$correo')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<script language="javascript">alert("Usuario creado correctamente");window.location.href="../paginas/ingreso.php"</script>';
            }
        }else {
            echo '<script language="javascript">alert("Las contraseñas no coinciden");window.location.href="../paginas/registro.php";</script>';

        }
    }

?>