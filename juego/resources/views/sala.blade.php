@include('layouts.app')
<?php 

	session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    

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
         	
           
            
    
      </nav>
      <!--Secciones-->
      <section class="grid">
         <div class="card">
         	<div class="botones">
           	<a class="boton primario">	<?php $jugador1 = "antonio"; echo $jugador1; ?></a><br>
           	<button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
           	</div>
            </div><br>
         <div class="card">
         	<div class="botones">
            <a class="boton primario"><?php $jugador2 = "David"; echo $jugador2; ?></a><br>
            <button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
        </div><br>
            </div>
         <div class="card">
         	<div class="botones">
           <a class="boton primario"> <?php $jugador3 = "José"; echo $jugador3; ?></a><br>
           <button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
        </div><br>
         </div>
         <div class="card">
         	<div class="botones">
            <a class="boton primario"><?php $jugador4 = "Jesús"; echo $jugador4; ?></a><br>
            <button class="btn btn-warning" onclick="preguntar()">Preguntar</a>
           	<button class="btn btn-warning" onclick="acusar()">Acusar</a>
         </div>
     </div>
   </div><br>
      </section>

   <script src="js/main.js"></script>
   <script src = "game.js"></script>
   
</body>
</html>

<div class="container" style="float: right;">
    <div class="row justify-content-center" style="float: right;">
        <div class="col-md-8">
        <div class="container">          
  <table class="table table-striped table-curved col-md-5 rounded">
    <thead>
      <tr class="table-info">
        <th>Quién</th>
        <th>Notas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Pedro</td>
        <td></td>
      </tr>
      <tr>
        <td>Juan</td>
        <td></td>
      </tr>
      <tr>
        <td>Carlos</td>
        <td></td>
      </tr>
      <tr>
          <td>Juanita</td>
          <td></td>
      </tr>
      <tr>
          <td>Antonio</td>
          <td></td>
      </tr>
      <tr>
          <td>Carolina</td>
          <td></td>
      </tr>
      <tr>
          <td>Manuel</td>
          <td></td>
      </tr>
      <tr class="table-info">
          <th>Módulo</th>
          <th>Notas</th>
      </tr>
      <tr>
          <td>Nomina</td>
          <td></td>
      </tr>
      <tr>
          <td>Facturación</td>
          <td></td>
      </tr>
      <tr>
          <td>Recibos</td>
          <td></td>
      </tr>
      <tr>
          <td>Comprobante contable</td>
          <td></td>
      </tr>
      <tr>
          <td>Usuarios</td>
          <td></td>
      </tr>
      <tr>
          <td>Contabilidad</td>
          <td></td>
      </tr>
      <tr class="table-info">
          <th>Tipo de error</th>
          <th>Notas</th>
      </tr>
      <tr>
          <td>404</td>
          <td></td>
      </tr>
      <tr>
          <td>Stack overflow</td>
          <td></td>
      </tr>
      <tr>
          <td>Memory out of range</td>
          <td></td>
      </tr>
      <tr>
          <td>Null pointer</td>
          <td></td>
      </tr>
      <tr>
          <td>Syntax error</td>
          <td></td>
      </tr>
      <tr>
          <td>Encoding error</td>
          <td></td>
      </tr>
    </tbody>
  </table>
</div>
        </div>
    </div>
</div>

<script>let secreto = "el programador"

function preguntar (){let preguntaI = prompt("¿Que deseas preguntar?")

}


if (preguntaI == preguntaI){
    alert(`la pregunta es ${preguntaI}`)


}


function acusar (){
    let Acusar = prompt("A quien deseas ACUSAR")
    
    if (Acusar == secreto){
       
            alert("ganaste el juego")
   
           }else{
               let jugador1 = alert ("pierde turno")
             
   
           }
        }
   


</script>