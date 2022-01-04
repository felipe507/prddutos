@extends('layout.app', ['current' => 'asdasdasd'])

@section('body')
 <div class="card-border">
    <form action="/categorias" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input  type="text" class="form-control" name="nome" id="nomeCategoria" placeholder="Nome da categoria">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
 </div>
@endsection