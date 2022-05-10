@extends('layouts.main')
@section('title','Alterar Usuário')
@section('content')

@php
$current_foto = "../images/fotos/".$usuario->foto;
@endphp

<div class="container main_container">
    <div class="row">
        <h3>Alterar Usuário</h3>
    </div>

    <form action="/update_usuario/{{ $usuario->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" required="required" value="{{ $usuario->nome }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" name="data_nasc" class="form-control" required="required" value="{{ $usuario->data_nasc }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="foto">
                    Foto de rosto
                    <small>(Formato requerido: .Jpg / Max 500px)</small>
                </label>
                <input type="file" name="foto" id="foto" class="form-control" accept="image/jpeg">

                <img src="<?php echo $current_foto;?>" class="current_foto">
                <p><small>Foto Atual</small></p>

                <div class="alert alert-danger mt-1 erros" role="alert" id="erro_format">
                    <i class="fas fa-exclamation-triangle"></i>
                    Apenas imagem no formato JPG são aceitas.
                </div>
                <div class="alert alert-danger mt-1 erros" role="alert" id="erro_size">
                    <i class="fas fa-exclamation-triangle"></i>
                    O tamanho do arquivo não deve ultrapassar 500kb.
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="ativo">Usuario Ativo?</label>
                <select name="ativo" id="ativo" class="form-control" required="required">
                    <option value="sim">Ativo</option>
                    <option value="nao" {{ $usuario->ativo == "nao" ? "selected='selected'" : "" }} >Inativo</option>
                </select>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Atualizar Usuário</button>
                <a href="/usuarios" class="btn btn-light btn-sm">Cancelar</a>
            </div>
        </div>    
    </div>
    </form>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Excluir Usuário</h5>
                <div class="card-body">
                    <p class="card-text">
                        Esta função excluir o usuário da base de dados.<br>
                        Dica: Você tem a opção de apenas deixar este usuário <strong>inativo</strong> .
                    </p>
                    <span class="btn btn-secondary step2">Clique para fazer a exclusão</span>

                    <div id="step2" class="mt-2">
                        Tem certeza?<br>
                        Deseja realmente excluir este usuário da base de dados?<br>
                        <form action="/deletar_usuario/{{ $usuario->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir Registro</button>
                        </form>
                        <span class="btn btn-light step2">Cancelar</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection