<?php

    //Iniciar Sesión
    session_start();
    require_once "conexion.php";

    if (isset($_POST['boton_ingreso'])) {
        $username = $_POST['username_jugador'];
        $contrasenna = $_POST['ingresoPassword'];
        $passencript = md5($contrasenna);
        
        $sql = mysqli_query($conn,"SELECT * FROM jugadores WHERE username_jugador='$username' AND password_jugador='$passencript'");
        $num = mysqli_num_rows($sql);
         
        if ($num!=0) {
            while($fila = mysqli_fetch_array($sql)){
            $_SESSION['username_jugador'] = $fila['username_jugador'];
            echo '<script language="javascript">alert("Inicio de sesion correcto");window.location.href="../paginas/inicio.php"</script>';
        }
        }else {
            echo '<script language="javascript">alert("Usuario y/o contraseña incorrectos");window.location.href="../paginas/ingreso.php"</script>';
    }
}
?>