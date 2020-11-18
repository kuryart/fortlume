<!-- Categoria add Modal -->
<div id="categoria-modal-add" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span data-modal="categoria-modal-add" class="close close-modal">&times;</span>
    <header class="categoria-add-modal-header">
      <h3 class="modal-title">
          Adicionar Categoria
      </h3>
    </header>
    <main class="categoria-add-modal-main">
      <form class="forms" id="categoria-form-add" action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

         <div class="form-container">
          <div class="form-body">
            <div class="form-group">
              <strong>Nome:</strong>
              <input type="text" name="nome" class="form-control input-custom" placeholder="Nome">
            </div>
          </div>
          <div class="form-group modal-foto-title">
            <strong>Foto:</strong>
          </div>            
          <div class="form-group">
            <label class="label-selecao-arquivo" for="produto-add-img"><strong>Selecionar &#187;</strong></label>
            <input id="produto-add-img" type="file" name="foto" class="form-control input-img input-custom" accept="image/*">
          </div>          
          <div class="form-footer">
            <button type="submit" class="btn-save">Salvar</button>
            <button type="button" data-modal="categoria-modal-add" class="close-modal btn-cancel">Cancelar</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>

<!-- Categoria Modal Edit -->
<div id="categoria-modal-edit" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-modal" data-modal="categoria-modal-edit">&times;</span>
    <header class="categoria-edit-modal-header">
      <h3 class="modal-title">
          Editar Categoria
      </h3>
    </header>
    <main class="categoria-edit-modal-main">
      <form class="forms" id="categoria-form-edit" action="{{ route('categorias.update', '1') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="form-container">
          <div class="form-body">
            <div class="form-group">
              <strong>Nome:</strong>
              <input id="categoria-nome-input" type="text" name="nome" value="" class="form-control input-custom" placeholder="Nome">
            </div>
          </div>
          <div class="form-group modal-foto-title">
            <strong>Foto:</strong>
          </div>            
          <div class="form-group">
            <label class="label-selecao-arquivo" for="produto-edit-img"><strong>Selecionar &#187;</strong></label>
            <input id="produto-edit-img" type="file" name="foto" class="form-control input-img input-custom" accept="image/*">
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Salvar</button>
            <button type="button" class="btn-cancel close-modal" data-modal="categoria-modal-edit">Cancelar</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>

<!-- Categoria Modal Delete -->
<div id="categoria-modal-delete" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-modal" data-modal="categoria-modal-delete">&times;</span>
    <header class="categoria-edit-modal-header">
      <h3 class="modal-title">
          Excluir Categoria
      </h3>
    </header>
    <main class="categoria-edit-modal-main">
      <form id="categoria-form-delete" action="{{ route('categorias.destroy', '1') }}" method="POST">
        @csrf
        @method('DELETE')

         <div class="form-container">
          <div class="form-body">
            <div class="form-group">
              <p class="delete-modal-text">Aviso! Esta operação irá excluir a categoria permanentemente. Tem certeza que deseja continuar?</p>
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Sim</button>
            <button type="button" class="btn-cancel close-modal" data-modal="categoria-modal-delete">Não</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>
