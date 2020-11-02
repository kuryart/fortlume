<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <button data-modal="obra-modal-add" class="btn-add-things open-modal">
                <i class="fas fa-plus add-icon"></i>
                OBRAS
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
                <div class="grid-obras">
                    @foreach ($obras as $obra)
                        <video class="obra-video" controls>
                           <source src="{{ asset($obra->video_url) }}" type="video/mp4">
                         </video>     
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('obra-modal')

</x-app-layout>