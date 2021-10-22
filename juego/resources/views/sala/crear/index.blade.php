@extends('layouts.app')

@section('content')
<?php 
    if (isset($_GET['submit'])) {
        $link = mysqli_connect("localhost", "root", "", "juego");
        $hex = rand(1000000,9000000);
        $n = dechex($hex);
        $mn = strtoupper($n);
        $sala = 'sala' . $mn;
        $sql = "CREATE TABLE $sala(codigo_sala varchar(25) primary key, jugador1 varchar(40), jugador2 varchar(40), jugador3 varchar(40), cartaoculta1 varchar(20), cartaoculta2 varchar(20), cartaoculta3 varchar(20) ) ";
        $resultado = mysqli_query($link,$sql);
        if ($resultado) {
            $sql = "SELECT * FROM cartas ORDER BY Rand() LIMIT 1;";
            $resultado1 = mysqli_query($link, $sql);
            $resultado2 = mysqli_query($link, $sql);
            $resultado3 = mysqli_query($link, $sql);
            $cartaocult1 = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
            $cartaocult2 = mysqli_fetch_array($resultado2, MYSQLI_ASSOC);
            $cartaocult3 = mysqli_fetch_array($resultado3, MYSQLI_ASSOC);
            $cartaoculta1 = $cartaocult1['carta'];
            $cartaoculta2 = $cartaocult2['carta'];
            $cartaoculta3 = $cartaocult3['carta'];
            $sql2 = "INSERT INTO $sala(codigo_sala, jugador1, cartaoculta1, cartaoculta2, cartaoculta3) values('$mn','1','$cartaoculta1','$cartaoculta2','$cartaoculta3')";
            $resultado4 = mysqli_query($link,$sql2);
            $url = 'sala';
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'?='.$mn.'"';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear una sala') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Por favor selecciona la privacidad de la sala') }}
                </div>
                <div class="card-body col-md-4 offset-md-4">
                    <form class="form-inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tipodesala" type="radio" id="1" value="1" required>
                            <label class="form-check-label" for="1">Pública</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tipodesala" type="radio" id="2" value="2">
                            <label class="form-check-label" for="2">Privada</label>
                        </div>
                </div>
                        <button type="submit" name="submit" class="btn btn-success">Crear sala</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection