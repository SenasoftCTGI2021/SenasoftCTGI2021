<?php include "../bootstrapCDN.php" //Librería bootstrap ?>
<?php include "../database/conexion.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_registro.css">
      <link rel="shortcut icon" href="../img/math.png">

</head>
<body>

    <header>
      <button onclick="toggleMenu();" type="button" id="abrir_menu"><i class="fas fa-bars"></i><b> Menú</b></button>
      <a href="ingreso.php"><button class="btn btn-primary" onclick="" id="ingresar">Ingresar</button></a>
    </header>

    <nav class="menu hideMenu">
	  <ul>
        <a href="index.php"><li>Inicio <i class="fas fa-house-user"></i></li></a>
        <a href="registro.php"><li>Crea tu cuenta <i class="fas fa-pencil-alt"></i></li></a>
        <a href="ingreso.php"><li>Ingresar <i class="fas fa-user"></i></li></a>
        <a href=""><li>Hay un problema <i class="fas fa-bug"></i></li></a>
	      </ul>
    </nav>

    <!-- formulario de ingreso -->
    <div class="d-flex justify-content-center text-center">
        <form action="../database/registro.php" class="formulario bg-light p-5" method="post">
	        <h1>Registrate</h1>
	    	<div class="form-group">
	    		<div class="input-group">
	    			<div class="input-group-prepend">
	    				<span class="input-group-text"><i class="fas fa-user"></i></span>
	    		 	</div>
                    <input type="text" class="form-control" name="registroNombre" placeholder="Nombre de usuario" required="">
 	    		</div>
	    	</div>
 	    	<div class="form-group">
	    		<div class="input-group"> 
	    			<div class="input-group-prepend">
	    				<span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
	    			</div>
                    <input type="email" class="form-control" name="registroEmail" placeholder="Correo electrónico" required="">
 	    		</div>
	    	</div>
	    	<div class="form-group">
 	    		<div class="input-group">
	    		    <div class="input-group-prepend">
	    		    	<span class="input-group-text"><i class="fas fa-lock"></i></span>
	    		    </div>
	    		    <input type="password" class="form-control" name="registroPassword" placeholder="Contraseña" required="">
	    	    </div>
	    	</div>
	    	<div class="form-group">
 	    		<div class="input-group"> 
	    			<div class="input-group-prepend">
	    				<span class="input-group-text"><i class="fas fa-lock"></i></span>
	    			</div>
	    		    <input type="password" class="form-control"  name="sPassword" placeholder="Confirmar contraseña" required="">
	    	    </div>
	    	</div>
			<p>Al registrarte estás aceptando <a href=""> los términos y condiciones</a></p>

	    	<button type="submit" name="boton_registrar" class="btn btn-primary">Registrarse</button><hr>

	    	<h4>¿Ya tienes cuenta?</h4>
	    	<h3><a href="ingreso.php">Ingresa</a></h3>
	    </form>
	</div>
	<!-- Fin del formulario--->

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

 