<?php 

	session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <style>

         h3-p{

            font-family: verdana;
            text-align: center;

         }

      </style>
    

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>¡A jugar!</title>
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
   <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/estilos.css">
   <link rel="stylesheet" href="css/dark.css" class="theme">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/light.css" class="theme">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="contenedor">
      <nav>
      	<!-- Menú-->
          <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
       <span>  <i class="fas fa-bars"></i></span>
    </button>
     <div class="dropdown-menu">
      <a class="dropdown-item" href="configuracion.php">Configuración</a>
      <a class="dropdown-item">Darkmode: <label class="switch" onclick="">
            <input type="checkbox" class="checkbox">
             <span class="slider round"></span>
            </label></a>     
             <a class="dropdown-item" href="inicio.php">Salir de la partida</a> 


    </div>
</div>
         	
           
            
    
      </nav>
      <!--Secciones-->
      <section class="grid">
         <div class="card">
         	<div class="botones">
           	<a class="boton primario">	<?php $jugador1 = "antonio"; echo $jugador1; ?></a><br>
           	<button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
           	</div>
            </div>
         <div class="card">
         	<div class="botones">
            <a class="boton primario"><?php $jugador2 = "David"; echo $jugador2; ?></a><br>
            <button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
        </div>
            </div>
         <div class="card">
         	<div class="botones">
           <a class="boton primario"> <?php $jugador3 = "José"; echo $jugador3; ?></a><br>
           <button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
        </div>
         </div>
         <div class="card">
         	<div class="botones">
            <a class="boton primario"><?php $jugador4 = "Jesús"; echo $jugador4; ?></a><br>
            <button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
         </div>
     </div>
   </div>
      </section>

   <script src="js/main.js"></script>
   <script src = "game.js"></script>
   
</body>
</html>
