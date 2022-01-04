@extends('layout.app', ['current' => 'Editar categoria'])

@section('body')
 <div class="card-border">
    <form action="/categorias/{{ $categoria->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nomeCategoria" value="{{ $categoria->nome }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
 </div>
@endsection