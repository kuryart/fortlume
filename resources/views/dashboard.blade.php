<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('CATEGORIAS') }} --}}
            <button data-modal="categoria-modal-add" class="btn-add-things open-modal">
                <i class="fas fa-plus add-icon"></i>
                CATEGORIA
            </button>
            {{-- <button data-modal="produto-modal-add" class="btn-add-things open-modal">
                <i class="fas fa-plus add-icon"></i>
                PRODUTO
            </button> --}}
        </h2>
    </x-slot>

    @if($errors->all())
        <div class="alert alert-danger" role="alert">
            Por favor, preencha todos os campos do produto corretamente e selecione uma imagem para o produto.
        </div>    
        @foreach($errors->all() as $error)
			<div class="alert alert-danger" role="alert">
				{{ $error }}
			</div>
		@endforeach
	@endif

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg main-main">
                <ul id="categoria-ul">
                    @foreach ($categorias as $categoria)
                        <li class="categoria-main">
                            
                        </li>                        
                    @endforeach                                                   
                </ul>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="gallery">
           @foreach ($categorias as $categoria)
              <div class="gallery-item" tabindex="0">
                <img src="{{ asset($categoria->foto_url) }}" class="gallery-image" alt="">
                <p class="gallery-text">{{ $categoria->nome }}</p>
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <button class="open-modal categoria-btn-edit" data-modal="categoria-modal-edit" data-categoriaId="{{ $categoria->id }}">
                                <i class="fas fa-edit"></i>
                            </button>                                    
                            <button class="open-modal categoria-btn-edit" data-modal="categoria-modal-delete" data-categoriaId="{{ $categoria->id }}">
                                <i class="fas fa-times"></i>
                            </button>
                        </li>
                    </ul>
                </div>
              </div>                
           @endforeach
        </div>
     </div>

    @include('categoria-modal')
    @include('produto-modal')
</x-app-layout>