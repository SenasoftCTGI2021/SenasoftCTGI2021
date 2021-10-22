@include('layouts.app')
<?php
$link = mysqli_connect("localhost", "root", "", "juego");
$urls = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
$codigo = substr($urls, -6, 6);
$jugadores = "SELECT * FROM sala$codigo";
$resultado = mysqli_query($link, $jugadores);
$numjugadores = mysqli_num_rows($resultado);
$sql = "SELECT * FROM sala$codigo";
$resultado = mysqli_query($link,$sql);

?>
<style>
.dotting{display:inline-block;width:10px;min-height:2px;padding-right:2px;border-left:2px solid currentColor;border-right:2px solid currentColor;background-color:currentColor;background-clip:content-box;box-sizing:border-box;-webkit-animation:dot 4s infinite step-start both;animation:dot 4s infinite step-start both}.dotting:before{content:'...'}.dotting::before{content:''}:root .dotting{margin-left:2px;padding-left:2px}@-webkit-keyframes dot{25%{border-color:transparent;background-color:transparent}50%{border-right-color:transparent;background-color:transparent}75%{border-right-color:transparent}}@keyframes dot{25%{border-color:transparent;background-color:transparent}50%{border-right-color:transparent;background-color:transparent}75%{border-right-color:transparent}}
</style>
</style>
<div class="container">
    <div class="row justify-content-center" style="padding-top: 15%">
        <div>
            <h1>Esperando jugadores<span class="dotting"></span></h1>
            <center><h1><?php echo $numjugadores ?>/4</h1></center>
            <center><h2 style="padding-top: 200px;">Codigo: <?php echo $codigo ?></h2></center>
        </div>
    </div>
</div>