@extends('obras.layout')

@section('content')
   <main class="main-container"> 
      <h1 class="ml7">
         <span class="text-wrapper">
           <span class="letters">- Obras -</span>
         </span>
      </h1>

      <div class="obras-gallery-container">
         <div class="grid-obras">
            @foreach ($obras as $obra)
                <video class="obra-video" controls>
                   <source src="{{ asset($obra->video_url) }}" type="video/mp4">
                 </video>     
            @endforeach
        </div>
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
                   <a href="#">Obras</a>
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
      <div id="obra-modal" class="modal">
         <span class="close">&times;</span>
         <img class="modal-content" id="obra-modal-img">
         <div id="caption"></div>
      </div>

 <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fas fa-level-up-alt"></i>
 </button>    
@endsection
