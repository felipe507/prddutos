@extends('layout.app', ['current' => 'categorias'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nome}}</td>
                            <td>
                                <a href="/categorias/editar/{{$categoria->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/categorias/apagar/{{$categoria->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach        
            </table>
            <a href="/categorias/novo/" class="btn btn-sm btn-primary">Novo</a>
        </div>
    </div>
@endsection