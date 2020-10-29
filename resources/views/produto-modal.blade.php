<!-- Produto add Modal -->
<div id="produto-modal-add" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span data-modal="produto-modal-add" class="close close-modal">&times;</span>
    <header class="produto-add-modal-header">
      <h3 class="modal-title">
          Adicionar Produto
      </h3>
    </header>
    <main class="produto-add-modal-main">
      <form id="add-secao-form" action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

         <div class="form-container">
          <div class="form-body">
            <div class="form-group">
              <strong>Nome:</strong>
              <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
              <strong>Descrição:</strong>
              <textarea class="form-control" name="descricao" rows="3" placeholder="Descrição do produto..."></textarea>
            </div>
            <div class="form-group">
              <strong>Categoria:</strong>
              <select id="add-produto-form-select" name="categoria_id" class="form-control">
                <option value="1" selected="teste">1</option>                  
                
                {{-- @foreach ($categorias as $categoria)
                  <option value="{{ $categoria->id }}" selected="||z||">{{ $categoria->nome }}</option>
                @endforeach --}}
              </select>
            </div>
            <div class="form-group modal-foto-title">
              <strong>Foto:</strong>
            </div>            
            <div class="form-group">
              <label for="selecao-arquivo"><strong>Selecionar &#187;</strong></label>
              <input id="selecao-arquivo" type="file" name="foto" class="form-control input-img" accept="image/*">
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Salvar</button>
            <button type="button" data-modal="produto-modal-add" class="close-modal btn-cancel">Cancelar</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>

<!-- Produto Modal Edit -->
<div id="produto-modal-edit" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-modal" data-modal="produto-modal-edit">&times;</span>
    <header class="produto-edit-modal-header">
      <h3 class="modal-title">
          Editar Produto
      </h3>
    </header>
    <main class="produto-edit-modal-main">
      <form id="add-secao-form" action="{{ route('produtos.update', '1') }}" method="POST">
        @csrf

         <div class="form-container">
          <div class="form-body">
            <div class="form-group">
              <strong>Nome:</strong>
              <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
              <strong>Descrição:</strong>
              <textarea class="form-control" name="descricao" rows="3" placeholder="Descrição do produto..."></textarea>
            </div>
            <div class="form-group">
              <strong>Categoria:</strong>
              <select id="edit-produto-form-select" name="categoria_id" class="form-control">
                <option value="teste" selected="teste">Teste</option>                  
                
                {{-- @foreach ($categorias as $categoria)
                  <option value="{{ $categoria->id }}" selected="||z||">{{ $categoria->nome }}</option>
                @endforeach --}}
              </select>
            </div>
            <div class="form-group modal-foto-title">
              <strong>Foto:</strong>
            </div>            
            <div class="form-group">
              <label for="selecao-arquivo"><strong>Selecionar &#187;</strong></label>
              <input id="selecao-arquivo" type="file" name="foto" class="form-control input-img" accept="image/*">
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Salvar</button>
            <button type="button" class="btn-cancel close-modal" data-modal="produto-modal-edit">Cancelar</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>

<!-- Produto Modal Delete -->
<div id="produto-modal-delete" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-modal" data-modal="produto-modal-delete">&times;</span>
    <header class="produto-edit-modal-header">
      <h3 class="modal-title">
          Excluir Produto
      </h3>
    </header>
    <main class="produto-edit-modal-main">
      <form id="add-secao-form" action="{{ route('produtos.destroy', '1') }}" method="DELETE">
        @csrf

         <div class="form-container">
          <div class="form-body">
            <div class="form-group">
              <p class="delete-modal-text">Aviso! Esta operação irá excluir o produto permanentemente. Tem certeza que deseja continuar?</p>
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Sim</button>
            <button type="button" class="btn-cancel close-modal" data-modal="produto-modal-delete">Não</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>
