<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('CATEGORIAS') }} --}}
            <button data-modal="categoria-modal-add" class="btn-add-things open-modal">
                <i class="fas fa-plus add-icon"></i>
                CATEGORIA
            </button>
            <button data-modal="produto-modal-add" class="btn-add-things open-modal">
                <i class="fas fa-plus add-icon"></i>
                PRODUTO
            </button>            
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul id="categoria-ul">
                    @foreach ($categorias as $categoria)
                        <li class="categoria-main">
                            <details open>
                                <summary>                                
                                    {{ $categoria->nome }}
                                    <button class="open-modal categoria-btn-edit" data-modal="categoria-modal-edit" data-categoriaId="{{ $categoria->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="open-modal categoria-btn-edit" data-modal="categoria-modal-delete" data-categoriaId="{{ $categoria->id }}">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </summary>
                                <div class="faq__content">
                                    <div class="grid">
                                        @foreach ($produtos as $produto)
                                            @if ($produto->categoria_id === $categoria->id)
                                                <div class="produto-main">
                                                    <img class="produto-img" src="{{ asset($produto->foto_url) }}" style="width:100%">
                                                    <h5 class="produto-title">{{ $produto->nome }}</h5>
                                                    <p class="produto-description">{{ $produto->descricao }}</p>                                    
                                                    <div class="produto-footer">
                                                        <button data-modal="produto-modal-edit" data-produtoId="{{ $produto->id }}" class="open-modal produto-btn-edit">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button data-modal="produto-modal-delete" data-produtoId="{{ $produto->id }}" class="open-modal produto-btn-delete">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>                                                    
                                            @endif                                            
                                        @endforeach
                                    </div>                          
                                </div>
                            </details>
                        </li>                        
                    @endforeach                                                   
                </ul>
            </div>
        </div>
    </div>

    @include('categoria-modal')
    @include('produto-modal')
</x-app-layout>