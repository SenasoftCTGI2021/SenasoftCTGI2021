@extends('layouts.app')

@section('content')
<link href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css" rel="stylesheet">
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

                    {{ __('Bienvenido al juego! ') }}<i class="far fa-circle"></i><i class="far fa-triangle"></i><i class="far fa-square"></i>
                </div>
                <div class="card-body col-md-12 offset-md-2">
                    <button type="submit" class="btn btn-warning">
                        {{ __('Unirse a una sala') }}
                    </button>
                    <button type="submit" class="btn btn-success">
                        {{ __('Crear una sala') }}
                    </button>
                    <button type="submit" class="btn btn-danger">
                        {{ __('Unirse a una sala privada') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection