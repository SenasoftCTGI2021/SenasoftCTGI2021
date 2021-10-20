<?php include "../bootstrapCDN.php" //Librería bootstrap?>
<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo_index.css">
  <title>¿Quién cometió el error?</title>
  <link rel="shortcut icon" href="../" width="800px">
</head>
<body>          
 
    <!-- cabecera-->
    <header>
 <!-- Desplegar-->
<div class="dropdown">
  <button id="ingresar" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="#">Configuración</a>
    <a class="dropdown-item" href="salir.php">Salir</a>
  </div>
</div>
  <!-- Fin botón desplegable -->
      <br><b><p id="">Bienvenido/a, <?php echo $_SESSION['username_jugador']; ?></p></b> 

    </header>
    <!-- Fin cabecera-->
    <br><br>
  <!-- Opciones-->
  <div class="container-fluid">
  <center>
    <button type="button" class="btn btn-secondary btn-circle">Crear partida</button><br><br>
    <button type="button" class="btn btn-secondary btn-circle">Unirse a una partida</button><br><br>
  

</center>
</div>
<!-- Fin opciones-->



  <script>
    menu = document.getElementsByTagName("nav")[0];
    texto = document.getElementsByTagName("b")[0];

    var toggleMenu = function(){
      if (menu.className == "menu hideMenu") {
        menu.className = "menu";
        texto.textContent = " Cerrar";
      } else {
        menu.className = "menu hideMenu";
        texto.textContent = " Menú";
      }
    }
  </script>

</body>
</html>
  