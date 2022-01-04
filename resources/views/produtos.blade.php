@extends('layout.app', ['current' => 'produtos'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produto</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Estoque</th>
                        <th>Preco</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>    
            </table>
            <button href="/produtos/novo/" role="button" onclick="novoProduto()" class="btn btn-sm btn-primary">Novo Produto</button>
        </div>
    </div>

    <div class="modal fade" id="dlgProdutos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cadastro de Produtos</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="nome" class="control-label">Nome</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="nome" placeholder="Nome do Produto">
                    </div>
                </div>
                <div class="form-group">
                    <label for="estoque" class="control-label">Estoque</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="estoque" placeholder="Estoque">
                    </div>
                </div>
                <div class="form-group">
                    <label for="preco" class="control-label">Preço</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="preco" placeholder="Preço">
                    </div>
                </div>
                <div class="form-group">
                    <label for="categoria" class="control-label">Categorias</label>
                    <div class="input-group">
                        <select class="form-control" id="categoria">
                            <option value="">Selecione</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

   
@endsection

@section('javascript')

<script type="text/javascript">
    function novoProduto() {
        $('#id').val('');
        $('#nome').val('');
        $('#estoque').val('');
        $('#preco').val('');
        $('#categoria').val('');
        $('#dlgProdutos').modal('show');
    }

    function carregaCategorias() {
        $.getJSON('/api/categorias', function(data) {
            for(i=0; i<data.length; i++) {
                opcao = '<option value="' + data[i].id + '">' + data[i].nome + '</option>';
                $('#categoria').append(opcao);
            }
        });
    }
</script>
@endsection