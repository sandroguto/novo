@extends('layouts.main')
@section('title','Cadastro de Clientes')
@section('content')


<div class="container main_container">
    
    <div class="row">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Teste Develcode
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Usuários</h5>
                    <a href="/usuarios" class="btn btn-primary">Listar Usuários</a>
                </div>
            </div>

        </div>

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Sobre o Candidato
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Olá. Me chamo Sandro e agradeço pela oportunidade e pelo teste.<br>
                        É meu primeiro contato com o framework Laravel. E estou estudando especialmente para fazer este teste.<br>
                        Tenho amplo conhecimento em PHP e MySQL o que me permite fazer sistemas sem utilização de framework.<br>
                        Estou aprendendo rápido e achei Laravel incrível. Pretendo continuar utilizando.
                    </p>
                </div>
            </div>

        </div>
        
    </div>
    
</div>

@endsection