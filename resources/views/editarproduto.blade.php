@extends('layout.app', ['current' => 'Novo produto'])

@section('body')
 <div class="card-border">
    <form action="/produtos/{{ $produto->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nomeProduto" value="{{ $produto->nome }}">
            <input type="number" class="form-control" name="estoque" id="quantidadeProduto" value="{{ $produto->estoque }}">
            <input type="number" class="form-control" name="preco" id="precoProduto" value="{{ $produto->preco }}">
            <select name="categoria_id" class="form-select" aria-label="Default select example">
                @foreach($categorias as $categoria)
                    @if($categoria->id == $produto->categoria_id)
                        <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
                    @endif
                    @if($categoria->id != $produto->categoria_id)
                        <option  value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
 </div>
@endsection