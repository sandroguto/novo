@extends('layouts.main')
@section('title','Cadastro de Clientes')
@section('content')


<div class="container main_container">
    
    <div class="row">
        <h3 class="d-block w-100">
            Usuários Cadastrados
            <a href="/usuarios/criar" class="btn btn-success btn-sm float-right">Criar Novo</a>
        </h3>
        <table class="table" id="tabela_usuarios">
            <thead>
                <tr>
                <th scope="col">Foto</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data de Nacimento</th>
                <th scope="col">Ativo</th>
                <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
@foreach($usuarios as $row) 
                <tr>
                    <td>{{ $row->foto }}</td>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->data_nasc }}</td>
                    <td>{{ $row->ativo }}</td>
                    <td>
                        <a href="/usuario/{{ $row->id }}" class="btn btn-light btn-sm">
                            Ver
                        </a>
                        <a href="/editar_usuario/{{ $row->id }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>




        
    </div>
    
</div>

@endsection