@extends('layouts.main')
@section('title', $usuario->nome . " - ID: ". $usuario->id)
@section('content')


<div class="container main_container">
    
    <div class="row">
        
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/images/fotos/{{ $usuario->foto }}" alt="{{ $usuario->nome }}">
            <div class="card-body">
                <h5 class="card-title">{{ $usuario->nome }}</h5>
                <p class="card-text">
                    <i class="fas fa-calendar-alt"></i> {{ date("d/m/Y", strtotime($usuario->data_nasc)) }}
                    <br>
                    @if($usuario->ativo == "sim")
                    <p>Status: <strong class="text-success">Ativo</strong></p>
                    @else
                    <p>Status: <strong class="text-danger">Inativo</strong></p>
                    @endif
                </p>

                <div class="btn-group d-flex" role="group" aria-label="First group">
                    <a href="/usuarios" class="btn btn-light">Voltar</a>
                    <a href="/editar_usuario/{{ $usuario->id }}" class="btn btn-warning">Editar</a>

                </div>



                
            </div>
        </div>





    </div>

</div>



@endsection