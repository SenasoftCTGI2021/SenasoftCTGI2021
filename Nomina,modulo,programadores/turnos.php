<?php
class Turnos{
    static public function crear_Turno(){
$i = 1;
$contador = 0;
$ganador = false;
while($ganador > false){
    if ($jugador1 == $pregunta){
        $jugador2 = $respuesta;
        echo $jugador2."=".$respuesta;
        $jugador3 = $respuesta;
        echo $jugador3."=".$respuesta;
        $jugador4 = $respuesta;
        echo $jugador4."=".$respuesta;
    }else{
        if ($jugador1 == $afirmacion){
            $respuesta = $secreta;
            return "El ganador es el ".$jugador1;
            $ganador = true;


        }else{
            if ($jugador2 == $pregunta){
        $jugador3 = $respuesta;
        echo $jugador3."=".$respuesta;
        $jugador4 = $respuesta;
        echo $jugador4"="$respuesta;
        $jugador1 = $respuesta;
        echo $jugador1."=".$respuesta;
    }else{
        if ($jugador1 == $afirmacion){
            if($afirmacion == $respuesta){
            return "El ganador es el ".$jugador1;
            $ganador = true;
}

        }
    }
}
}


?>