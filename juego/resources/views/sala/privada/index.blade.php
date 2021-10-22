@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Por favor ingresa el código de la sala') }}
                </div>
                <div class="card-body col-md-12 offset-md-2">

                    <form class="form-inline">
                        <div class="form-group mb-2">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" name="codigo" id="inputPassword2" placeholder="17E4D7">
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger mb-2">Unirse a la sala<i class="fa fa-sort-alpha-asc"
                                aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    if (isset($_GET['submit'])) {
        $link = mysqli_connect("localhost", "root", "", "juego");
        $codigo = $_GET['codigo'];
        $sql = "SELECT * FROM sala$codigo";
        $resultado = mysqli_query($link,$sql);
        if ($resultado) {
            $jugadores = mysqli_num_rows($resultado);
            if ($jugadores = 1) {
                $sql = "INSERT INTO sala$codigo(jugador2) values ('2')";
                $resultado = mysqli_query($link, $sql);
                $url = 'sala';
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'?='.$codigo.'"';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
            }else {
                if ($jugadores = 2) {
                    $sql = "INSERT INTO sala$codigo(jugador3) values ('3')";
                $resultado = mysqli_query($link, $sql);
                $url = 'sala';
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'?='.$codigo.'"';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
                } else {
                    if ($jugadores = 3) {
                        $sql = "INSERT INTO sala$codigo(jugador4) values ('4')";
                $resultado = mysqli_query($link, $sql);
                $url = 'sala';
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'?='.$codigo.'"';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;

                    }                }
            }

        } else {
            echo '<script language="javascript">alert("La sala no existe o ha expirado");</script>';
        }
        
    }

?>
@endsection