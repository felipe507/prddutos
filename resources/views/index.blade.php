@extends('layout.app', ["current" => "home"])

@section('body')
    <div class="jumbotron bg-ligth border border-secundary" >
        <div class="row">
            <div class=col-6>
                <div class="card-deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Produtos</h5>
                            <p class="card-text">
                                Aqui você cadastra os produtos todos os produtos.
                                Só não se esqueça de cadastrar previamente as categorias.
                            </p>
                            <a href="/produtos" class="btn btn-primary">Cadastrar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=col-6>
                <div class="card-deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Categorias</h5>
                            <p class="card-text">
                                Aqui você cadastra as categorias dos produtos.
                            </p>
                            <a href="/categorias" class="btn btn-primary">Cadastrar</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    
@endsection