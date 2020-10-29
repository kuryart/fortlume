<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('CATEGORIAS') }} --}}
            <button class="example_c">
                <i class="fas fa-plus add-icon"></i>
                Categoria
            </button>
            <button data-modal="produto-modal-add" class="example_c open-modal">
                <i class="fas fa-plus add-icon"></i>
                Produto
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
                    <li>
                        <details open>
                            <summary>Portas</summary>
                            <div class="faq__content">
                                <div class="grid">
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button data-modal="produto-modal-edit" class="open-modal produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button data-modal="produto-modal-delete" class="open-modal produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                    <div class="produto-container">
                                        <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" style="width:100%">
                                        <h5 class="produto-title">Produto1</h5>
                                        <p class="produto-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</p>                                    
                                        <div class="produto-footer">
                                            <button class="produto-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="produto-btn-delete">
                                                <i class="fas fa-times"></i>
                                            </button>                                            
                                        </div>
                                    </div>
                                </div>                          
                            </div>
                        </details>
                    </li>       
                    <li>
                        <details open>
                            <summary>Janelas</summary>
                            <div class="faq__content">
                                <div class="grid">
                                    <div class="produto-container">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</div>
                                    <div class="produto-container">Quibusdam, eos esse dolorum facere voluptatem eius, dolore quas totam aspernatur obcaecati harum? Nihil eligendi eos minus odit minima earum incidunt rem fugit reprehenderit, molestiae possimus eveniet itaque laudantium excepturi.</div>
                                    <div class="produto-container">Ducimus quibusdam inventore delectus doloribus dignissimos. Dignissimos quos officia minus exercitationem perspiciatis harum iusto molestiae deleniti quod sunt amet recusandae autem, neque doloremque ad alias eaque consequuntur nesciunt quis eius!</div>
                                    <div class="produto-container">Cumque aspernatur ex ipsum dolorum eius, tempore omnis minus sequi architecto totam sunt maxime nemo, ab repellendus. Aut voluptatem saepe voluptatibus nisi ipsum. Debitis corporis culpa ipsa error nemo doloribus.</div>
                                    <div class="produto-container">Consequatur dolore, architecto quos saepe consequuntur libero minus totam? Enim optio provident commodi corporis officiis, sunt maiores? Cupiditate consequuntur, cumque natus corporis velit sunt ad magni aliquid facere deleniti molestiae.</div>
                                    <div class="produto-container">Voluptatibus similique modi voluptatum voluptatem quo quod minima ducimus facere, sequi libero accusamus nisi nobis? Minima error tempore quo esse quod odit, deleniti labore nulla ullam velit nemo neque sint!</div>
                                    <div class="produto-container">Qui, corporis delectus? Pariatur vel autem commodi, accusantium, voluptate obcaecati iste, a debitis facilis repellendus mollitia. Dolore dicta totam, quaerat omnis accusantium magni alias voluptates eligendi ex id aut dolorem?</div>
                                    <div class="produto-container">Recusandae tempora ab error omnis exercitationem illo accusamus esse sit ipsa accusantium iure, possimus ducimus quis consequuntur qui corporis nobis culpa repudiandae! Suscipit, debitis. Omnis delectus at vitae laborum quos?</div>
                                    <div class="produto-container">Dolorem saepe accusamus sed placeat porro ex, ab, vel eaque libero incidunt facilis delectus, iure odio dicta error consequuntur perspiciatis quasi? Corrupti incidunt quia asperiores quo magnam at minima laudantium?</div>
                                    <div class="produto-container">Dolor ad saepe, nemo fugit tempora autem est fugiat quis porro atque nam repellendus maxime neque voluptatem rerum amet odit aspernatur voluptates iusto eos laboriosam enim vel. Eius, debitis beatae!</div>
                                </div>                          
                            </div>
                        </details>
                    </li> 
                    <li>
                        <details open>
                            <summary>Vidros</summary>
                            <div class="faq__content">
                                <div class="grid">
                                    <div class="produto-container">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse aliquid laboriosam minima ex praesentium recusandae reprehenderit unde sit tempore atque aut commodi quae expedita corrupti, dignissimos architecto. Eius, maiores ad?</div>
                                    <div class="produto-container">Quibusdam, eos esse dolorum facere voluptatem eius, dolore quas totam aspernatur obcaecati harum? Nihil eligendi eos minus odit minima earum incidunt rem fugit reprehenderit, molestiae possimus eveniet itaque laudantium excepturi.</div>
                                    <div class="produto-container">Ducimus quibusdam inventore delectus doloribus dignissimos. Dignissimos quos officia minus exercitationem perspiciatis harum iusto molestiae deleniti quod sunt amet recusandae autem, neque doloremque ad alias eaque consequuntur nesciunt quis eius!</div>
                                    <div class="produto-container">Cumque aspernatur ex ipsum dolorum eius, tempore omnis minus sequi architecto totam sunt maxime nemo, ab repellendus. Aut voluptatem saepe voluptatibus nisi ipsum. Debitis corporis culpa ipsa error nemo doloribus.</div>
                                    <div class="produto-container">Consequatur dolore, architecto quos saepe consequuntur libero minus totam? Enim optio provident commodi corporis officiis, sunt maiores? Cupiditate consequuntur, cumque natus corporis velit sunt ad magni aliquid facere deleniti molestiae.</div>
                                    <div class="produto-container">Voluptatibus similique modi voluptatum voluptatem quo quod minima ducimus facere, sequi libero accusamus nisi nobis? Minima error tempore quo esse quod odit, deleniti labore nulla ullam velit nemo neque sint!</div>
                                    <div class="produto-container">Qui, corporis delectus? Pariatur vel autem commodi, accusantium, voluptate obcaecati iste, a debitis facilis repellendus mollitia. Dolore dicta totam, quaerat omnis accusantium magni alias voluptates eligendi ex id aut dolorem?</div>
                                    <div class="produto-container">Recusandae tempora ab error omnis exercitationem illo accusamus esse sit ipsa accusantium iure, possimus ducimus quis consequuntur qui corporis nobis culpa repudiandae! Suscipit, debitis. Omnis delectus at vitae laborum quos?</div>
                                    <div class="produto-container">Dolorem saepe accusamus sed placeat porro ex, ab, vel eaque libero incidunt facilis delectus, iure odio dicta error consequuntur perspiciatis quasi? Corrupti incidunt quia asperiores quo magnam at minima laudantium?</div>
                                    <div class="produto-container">Dolor ad saepe, nemo fugit tempora autem est fugiat quis porro atque nam repellendus maxime neque voluptatem rerum amet odit aspernatur voluptates iusto eos laboriosam enim vel. Eius, debitis beatae!</div>
                                </div>                          
                            </div>
                        </details>
                    </li>                                                      
                </ul>
            </div>
        </div>
    </div>

    {{-- @include('categoria-modal') --}}
    @include('produto-modal')

</x-app-layout>