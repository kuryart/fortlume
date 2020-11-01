@extends('produtos.layout')

@section('content')
   <main class="main-container">  
 
      <h1 class="ml7">
         <span class="text-wrapper">
           <span class="letters">- Produtos -</span>
         </span>
      </h1>

      @foreach ($categorias as $categoria)      
         <div class="produtos-gallery-container">         
            <div class="categoria-title-container">
               <h1 class="categoria-title">&#xBB; {{ $categoria->nome }}</h3>
            </div>
            <div class="grid">
               @foreach ($produtos as $produto)
                  @if ($produto->categoria_id === $categoria->id)
                     <div class="produto-main zoom">
                        <img id="img-{{ $produto->id }}" class="produto-img" src="{{ asset($produto->foto_url) }}" alt="{{ $produto->nome }}" style="width:100%">
                     </div>                      
                  @endif
               @endforeach
            </div>
         </div>
      @endforeach  
   </main>

    <footer id="contato" class="footer">            
       <ul class="footer__nav">
          <li class="nav__item">
             <ul class="nav__ul">
                <li>
                   <img class="footer__logo" src="{{ asset('img/logo-fortlume.png') }}" alt="#" />
                   <p>Esquadrias de alumínio e vidros temperados</p>
                 </li>
                 <div class="social">
                   <a href="#">
                      <i class="fab fa-facebook-square"></i>
                   </a>
                   <a href="#">
                      <i class="fab fa-facebook-square"></i>
                   </a>
                 </div>
             </ul>
          </li>

          <li class="nav__item">          
            <ul class="nav__ul">
                <h2 class="nav__title">Mapa do Site</h2> 
                <li>
                   <a href="#">Home</a>
                </li>          
                <li>
                   <a href="#">Quem Somos</a>
                </li>                      
                <li>
                   <a href="#">Produtos</a>
                </li>
                <li>
                   <a href="#">Obras</a>
                </li>                  
                <li>
                   <a href="#">Orçamento</a>
                </li>
                <li>
                   <a href="#">Contato</a>
                </li>
            </ul>
          </li>

          <li class="nav__item">
            <ul class="nav__ul">                  
              <h2 class="nav__title">Endereço</h2>                  
              <li>                     
                 <a href="https://www.google.com/maps/dir/-22.1871,-49.9952/-22.18137,-49.96297/@-22.1835514,-49.9956912,13.75z/data=!4m4!4m3!1m1!4e1!1m0">
                    <i class="fas fa-map-marker-alt"></i>
                    Av. República, 4926 - Nucleo Hab. Castelo Branco, Marília - SP, 17511-000
                 </a>
              </li>                  
              <h2 class="nav__title">Telefones</h2>
              <li>                     
                 <a href="#">
                    <i class="fas fa-phone"></i>
                    (14) 3306-7886
                 </a>                     
              </li>                  
              <li>
                 <a href="#">
                    <i class="fab fa-whatsapp"></i>
                    (14) 99803-2135
                 </a>
              </li>
              <h2 class="nav__title">Email</h2>
              <li>                     
                 <a href="#">
                    <i class="fas fa-envelope"></i>
                    fortlume@gmail.com
                 </a>                     
              </li>
            </ul>
          </li>
       </ul>            

       <div class="legal">
          <p>&copy; 2020 Fortlume. Todos os direitos reservados. | Desenvolvido por Cury Dev Soluções.</p>
       </div>
     </footer>     

      <!-- The Modal -->
      <div id="produto-modal" class="modal">
         <span class="close">&times;</span>
         <img class="modal-content" id="produto-modal-img">
         <div id="caption"></div>
      </div>

 <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fas fa-level-up-alt"></i>
 </button>    
@endsection
