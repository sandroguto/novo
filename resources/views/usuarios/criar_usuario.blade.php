@extends('layouts.main')
@section('title','Cadastro de Clientes')
@section('content')


<div class="container main_container">
    <div class="row">
        <h3>Novo Usuário</h3>
    </div>

    <form action="/add_usuario" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" required="required">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" name="data_nasc" class="form-control" required="required">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="foto">
                    Foto de rosto
                    <small>(Formato requerido: .Jpg / Max 500px)</small>
                </label>
                <input type="file" name="foto" id="foto" class="form-control" accept="image/jpeg" required="required">

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

    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Criar Usuário</button>
                <a href="/usuarios" class="btn btn-light btn-sm">Cancelar</a>
            </div>
        </div>    
    </div>
    </form>
    
</div>

@endsection