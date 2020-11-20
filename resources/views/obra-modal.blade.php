<!-- Obra add Modal -->
<div id="obra-modal-add" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span data-modal="obra-modal-add" class="close close-modal">&times;</span>
    <header class="obra-add-modal-header">
      <h3 class="modal-title">
          Adicionar Obra
      </h3>
    </header>
    <main class="obra-add-modal-main">
      <form class="forms" id="obra-form-add" action="{{ route('obras.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

         <div class="form-container">
          <div class="form-body">
            <div class="form-group modal-foto-title">
              <strong>Vídeo:</strong>
            </div>            
            <div class="form-group">
              <label class="label-selecao-arquivo" for="obra-add-vid"><strong>Selecionar &#187;</strong></label>
              <input id="obra-add-vid" type="file" name="video" class="form-control input-img input-custom" accept="video/*">
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Salvar</button>
            <button type="button" data-modal="obra-modal-add" class="close-modal btn-cancel">Cancelar</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>

<!-- Obra Modal Edit -->
<div id="obra-modal-edit" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-modal" data-modal="obra-modal-edit">&times;</span>
    <header class="obra-edit-modal-header">
      <h3 class="modal-title">
          Editar Obra
      </h3>
    </header>
    <main class="obra-edit-modal-main">
      <form class="forms" id="obra-form-edit" action="{{ route('obras.update', '1') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="form-container">
          <div class="form-body">
            <div class="form-group modal-foto-title">
              <strong>Vídeo:</strong>
            </div>            
            <div class="form-group">
              <label class="label-selecao-arquivo" for="obra-add-vid"><strong>Selecionar &#187;</strong></label>
              <input id="obra-add-vid" type="file" name="video" class="form-control input-img input-custom" accept="video/*">
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Salvar</button>
            <button type="button" class="btn-cancel close-modal" data-modal="obra-modal-edit">Cancelar</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>

<!-- Obra Modal Delete -->
<div id="obra-modal-delete" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-modal" data-modal="obra-modal-delete">&times;</span>
    <header class="obra-edit-modal-header">
      <h3 class="modal-title">
          Excluir Obra
      </h3>
    </header>
    <main class="obra-edit-modal-main">
      <form id="obra-form-delete" action="{{ route('obras.destroy', '1') }}" method="POST">
        @csrf
        @method('DELETE')

         <div class="form-container">
          <div class="form-body">
            <div class="form-group">
              <p class="delete-modal-text">Aviso! Esta operação irá excluir a obra permanentemente. Tem certeza que deseja continuar?</p>
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn-save">Sim</button>
            <button type="button" class="btn-cancel close-modal" data-modal="obra-modal-delete">Não</button>
          </div>
        </div>
      </form>
    </main>
  
  </div>  
</div>
