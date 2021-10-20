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
      <b><p id="ingresar">Bienvenido/a, <?php echo $_SESSION['username_jugador']; ?></p></b> <br>
          <!-- Desplegar-->
<div class="dropdown">
  <button id="ingresar" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="salir.php">Salir</a>
  </div>
</div>
    </header>

  <!-- slider -->
  <center>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="" class="carousel-img">
      </div>
      <div class="carousel-item">
        <img src="" class="carousel-img">
      </div>
      <div class="carousel-item">
        <img src="" class="carousel-img">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div> 
  <!--fin slider -->
</center>



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
  