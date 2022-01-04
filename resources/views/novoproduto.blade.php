@extends('layout.app', ['current' => 'Novo produto'])

@section('body')
 <div class="card-border">
    <form action="/produtos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nomeProduto" placeholder="Nome da produto">
            <input type="number" class="form-control" name="estoque" id="quantidadeProduto" placeholder="Estoque do produto">
            <input type="number" class="form-control" name="preco" id="precoProduto" placeholder="Preco da produto">
            <select name="categoria_id" onclickxamppp="carregacategorias()" class="form-select" aria-label="Default select example" id="categoria">
                @foreach($categorias as $categoria)
                    <option  value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
 </div>
@endsection