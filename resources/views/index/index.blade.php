@extends('index.layout')

@section('content')
<div id="home">
    <div class="slideshow-container">

       <div class="mySlides fade">
         <img src="{{ asset('img/f-slide-1.jpg') }}" style="width:100%">
       </div>
       
       <div class="mySlides fade">
         <img src="{{ asset('img/f-slide-2.jpg') }}" style="width:100%">
       </div>
       
       <div class="mySlides fade">
         <img src="{{ asset('img/f-slide-3.jpg') }}" style="width:100%">
       </div>
       
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>
       
    </div>

    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>        

 </div>

 <div id="quem-somos" class="about_section layout_padding">

    <div class="about-grid">
       <div class="about-left">
          <h4>QUEM SOMOS</h4>
          <h3 style="text-transform: none !important">Esquadrias de alumínio e vidros temperados</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
       </div>
       <div class="about-right">
          <img class="img-responsive" src="{{ asset('img/about.png') }}" alt="#" />
       </div>
    </div>

 </div>

 <div id="produtos" class="about_section layout_padding" style="background: #1a2428;">
    
    <div class="produtos-grid">

       <div class="produtos-title">
          <h4>PRODUTOS</h4>
          <h3 class="white_font" style="text-transform: none !important">Produtos de alta qualidade</h3>
       </div>
       
       <div class="produtos-list">
          <div class="produto">
             <div class="produto-img-container">
                <img class="produto-img" src="{{ asset('img/produto1.jpg') }}" alt="#" />
                <div class="overlay">
                   <div class="produto-overlay-text">
                      <i class="fas fa-search-plus"></i>
                   </div>
                 </div>
             </div>                  
             <p class="white_font produto-title">PORTAS</p>                  
          </div>
          <div class="produto">
             <div class="produto-img-container">
                <img class="produto-img" src="{{ asset('img/produto2.jpg') }}" alt="#" />
                <div class="overlay">
                   <div class="produto-overlay-text">
                      <i class="fas fa-search-plus"></i>
                   </div>
                 </div>
             </div>                  
             <p class="white_font produto-title">JANELAS</p>                  
          </div>
          <div class="produto">
             <div class="produto-img-container">
                <img class="produto-img" src="{{ asset('img/produto3.jpg') }}" alt="#" />
                <div class="overlay">
                   <div class="produto-overlay-text">
                      <i class="fas fa-search-plus"></i>
                   </div>
                 </div>
             </div>                  
             <p class="white_font produto-title">VIDROS</p>                  
          </div>
       </div>
       <div class="produto-btn-wrapper">
          <a class="example_b" href="#">
             MAIS PRODUTOS
          </a>
       </div>
    </div>         

    <!-- The Modal -->
    <div id="myModal" class="modal">
       <span class="close">&times;</span>
       <img class="modal-content" id="img01">
       <div id="caption"></div>
    </div>         
    
 </div>

 <div id="obras" class="about_section layout_padding">

    <div class="obras-grid">

       <div class="obras-title">
          <h4>OBRAS</h4>
          <h3 style="text-transform: none !important">Confira nossas obras finalizadas</h3>
       </div>
       
       <div class="obras-list">
          <video class="obra-video" controls>
             <source src="videos/demo-video.mp4" type="video/mp4">
           </video>
       </div>

       <div class="obras-btn-wrapper">
          <a class="example_b" href="#">
             VER MAIS
          </a>
       </div>
    </div>

 </div>

 <div id="orcamento" class="about_section layout_padding" style="background: #1a2428;">
    
    <div class="orcamento-grid">

       <div class="orcamento-title">
          <h4>ORÇAMENTO</h4>
          <h3 class="white_font" style="text-transform: none !important">Solicite um orçamento personalizado</h3>
          <div class="contact-form">
             <form>
                <input type="text" placeholder="Nome" />
                <input type="email" placeholder="Email" />
                <input type="text" placeholder="Telefone" />
                <input type="text" placeholder="Assunto">
                <textarea placeholder="Mensagem"></textarea>

                <div class="produto-btn-wrapper">
                   <input type="submit" value="ENVIAR">
                </div>
             </form>
          </div>            
       </div>
       
       <div class="orcamento-list">
          <img class="budget-image" src="{{ asset('img/budget.png') }}" alt="#" />
       </div>
    </div>         
    
 </div>
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

 <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fas fa-level-up-alt"></i>
 </button>    
@endsection
