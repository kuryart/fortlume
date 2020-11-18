@extends('produto.layout')

@section('content')
   <main class="main-container">  
 
      <h1 class="ml7">
         <span class="text-wrapper">
         <span class="letters">{{ $categoriaFinal->nome }}</span>
         </span>
      </h1>

      <div class="container">
         <div class="gallery">
            @for ($i = 0; $i < $produtos->count(); $i++)
               <div class="gallery-item" onclick="openModal();currentSlide({{ $i + 1 }})" tabindex="0">
                  <img src="{{ asset($produtos->slice($i, 1)->first()->foto_url) }}" class="gallery-image" alt="">
                  <div class="gallery-item-info">
                     <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-external-link-alt" aria-hidden="true"></i></li>
                     </ul>
                  </div>
               </div>
            @endfor
         </div>
      </div>

      <div id="myModal" class="modal">
         <span class="close cursor" onclick="closeModal()">&times;</span>
         <div class="modal-content">
       
            @for ($i = 0; $i < $produtos->count(); $i++)
               <div class="mySlides">
                  <div class="numbertext">{{ $i + 1 }} / {{ $produtos->count() }}</div>                  
                  {{-- <div class="img-lightbox-container"> --}}
                     <img src="{{ asset($produtos->slice($i, 1)->first()->foto_url) }}" class="img-lightbox">
                  {{-- </div> --}}

               </div>
            @endfor
            
         </div>
         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div> 
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
                  <a href="https://www.facebook.com/fortlume">
                     <i class="fab fa-facebook-square"></i>
                  </a>
                  <a href="https://www.instagram.com/fortlume_esquadrias/">
                     <i class="fab fa-instagram"></i>
                  </a>
                </div>
            </ul>
         </li>

         <li class="nav__item">          
           <ul class="nav__ul">
               <h2 class="nav__title">Mapa do Site</h2> 
               <li>
                  <a href="{{ route('home') }}">Home</a>
               </li>          
               <li>
                  <a href="{{ route('home') }}/#quem-somos">Quem Somos</a>
               </li>                      
               <li>
                  <a href="{{ route('produtos.view') }}">Produtos</a>
               </li>
               <li>
                  <a href="{{ route('obras.view') }}">Obras</a>
               </li>                  
               <li>
                  <a href="{{ route('home') }}/#orcamento">Orçamento</a>
               </li>
               <li>
                  <a href="{{ route('home') }}/#contato">Contato</a>
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
                <a href="tel:551433067886">
                   <i class="fas fa-phone"></i>
                   (14) 3306-7886
                </a>                     
             </li>                  
             <li>
                <a href="https://wa.me/5514981961060">
                   <i class="fab fa-whatsapp"></i>
                   (14) 99803-2135
                </a>
             </li>
             <h2 class="nav__title">Email</h2>
             <li>                     
                <a href="mailto:fortlume@gmail.com">
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
