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

                    {{ __('Bienvenido al juego, ') }}{{ Auth::user()->name}}{{ __('!') }}&nbsp;&nbsp;<i class="bi bi-circle"></i>&nbsp;<i class="bi bi-triangle"></i>&nbsp;<i class="bi bi-square"></i>
                </div>
                <div class="card-body col-md-12 offset-md-2">
                    
                <a href="" class="btn btn-warning" role="button">Unirse a una sala</a>
                <a href="{{ route('crear') }}" class="btn btn-success" role="button">Crear una sala</a>  
                <a href="{{ route('privada') }}" class="btn btn-danger" role="button">Unirse a una sala privada</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection