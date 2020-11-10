@extends('index.layout')

@section('content')

<div id="home" style="background: #fff;">
    <div class="slideshow-container">

       <div class="mySlides fade">
         <img src="{{ asset('img/slide1.jpg') }}" style="width:100%">
       </div>
       
       <div class="mySlides fade">
         <img src="{{ asset('img/slide2.jpg') }}" style="width:100%">
       </div>
       
       <div class="mySlides fade">
         <img src="{{ asset('img/slide3.jpg') }}" style="width:100%">
       </div>

       <div class="mySlides fade">
         <img src="{{ asset('img/slide4.jpg') }}" style="width:100%">
       </div>

       <div class="mySlides fade">
         <img src="{{ asset('img/slide5.jpg') }}" style="width:100%">
       </div>

       <div class="mySlides fade">
         <img src="{{ asset('img/slide6.jpg') }}" style="width:100%">
       </div>

       <div class="mySlides fade">
         <img src="{{ asset('img/slide7.jpg') }}" style="width:100%">
       </div>
       
       <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
       <a class="next" onclick="plusSlide(1)">&#10095;</a>
       
    </div>

    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(0)"></span> 
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span> 
    </div>
 </div>

 <div id="quem-somos" class="about_section layout_padding" style="background: #fff;">

    <div class="about-grid">
       <div class="about-left">
          <h4>QUEM SOMOS</h4>
          <h3 style="text-transform: none !important">Esquadrias de alumínio e vidros temperados</h3>
          <div class="about-itens">
            <div class="about-item">
               <div class="about-icon-container">
                  <i class="far fa-check-square about-icon"></i>
               </div>
               <div class="about-text">
                  <h4 class="about-title">Qualidade</h4>
                  <p class="about-paragraph">Para melhor satisfazê-lo trabalhamos com os melhores produtos disponiveis no mercado, garantindo qualidade e um belo visual.</p>
               </div>
            </div>
            <div class="about-item">
               <div class="about-icon-container">
                  <i class="fas fa-wrench about-icon"></i>
               </div>
               <div class="about-text">
                  <h4 class="about-title">Equipe</h4>
                  <p class="about-paragraph">Contamos com uma equipe altamente profissional e treinada para melhor atende-lo sem causar qualquer desconforto.</p>
               </div>
            </div>
            <div class="about-item">
               <div class="about-icon-container">
                  <i class="far fa-clock about-icon"></i>
               </div>
               <div class="about-text">
                  <h4 class="about-title">Economia</h4>
                  <p class="about-paragraph">Com Profissionais Qualificados e Produtos de alta tecnologia garantimos um serviço ágil e eficiente.</p>
               </div>
            </div>
          </div>
       </div>
       <div class="about-right">
          <img class="img-responsive" src="{{ asset('img/f-slide-3.jpg') }}" alt="#" />
          <p class="quem-somos-legenda">Um visual bonito e seguro, para o ambiente desejado</p>
       </div>
    </div>

 </div>

 <div id="produtos" class="about_section layout_padding" style="background: #fff;">
    <div class="produtos-grid">
       <div class="produtos-title">
          <h4>PRODUTOS</h4>
          <h3 class="" style="text-transform: none !important">Produtos de alta qualidade</h3>
       </div>
       
       {{-- <div class="produtos-list">
          <div class="produto">
             <div class="produto-img-container">
                <img id="myImg" class="produto-img" src="{{ asset('img/produto1.jpg') }}" alt="#" />
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
          <a class="example_b" href="{{ route('produtos.view') }}">
            VER TODOS
          </a>
       </div> --}}

      <div id="splide" class="splide">
         <div class="splide__track">
            <ul class="splide__list">
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <img src="{{ asset('img/slide1.jpg') }}">
                  </div>
                  <p class="produto-title">Produto1</p>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <img src="{{ asset('img/slide2.jpg') }}">
                  </div>
                  <p class="produto-title">Produto2</p>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <img src="{{ asset('img/slide3.jpg') }}">
                  </div>
                  <p class="produto-title">Produto3</p>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <img src="{{ asset('img/slide4.jpg') }}">
                  </div>
                  <p class="produto-title">Produto4</p>
               </li>
            </ul>
         </div>
      </div>
    </div>
 </div>

 <div id="obras" class="about_section layout_padding" style="background: #fff;">
    <div class="obras-grid">
       <div class="obras-title">
          <h4>OBRAS</h4>
          <h3 style="text-transform: none !important">Confira nossas obras finalizadas</h3>
       </div>

       <div id="splide-obras" class="splide">
         <div class="splide__track">
            <ul class="splide__list">
               <li class="splide__slide">
                  <video class="obra-video" controls>
                     <source src="{{ asset('vid/demo-video.mp4') }}" type="video/mp4">
                  </video>
               </li>
               <li class="splide__slide">
                  <video class="obra-video" controls>
                     <source src="{{ asset('vid/demo-video.mp4') }}" type="video/mp4">
                  </video>
               </li>
               <li class="splide__slide">
                  <video class="obra-video" controls>
                     <source src="{{ asset('vid/demo-video.mp4') }}" type="video/mp4">
                  </video>
               </li>
               <li class="splide__slide">
                  <video class="obra-video" controls>
                     <source src="{{ asset('vid/demo-video.mp4') }}" type="video/mp4">
                  </video>
               </li>
            </ul>
         </div>
      </div>       

       {{-- <div class="obras-list">
          <video class="obra-video" controls>
             <source src="videos/demo-video.mp4" type="video/mp4">
           </video>
       </div>

       <div class="obras-btn-wrapper">
          <a class="example_b" href="{{ route('obras.view') }}">
            VER TODAS
          </a>
       </div> --}}
    </div>

 </div>

 <div id="orcamento" class="about_section layout_padding" style="background: #fff;">   
    <div class="orcamento-grid">
       <div class="orcamento-title">
          <h4>ORÇAMENTO</h4>
          <h3 class="" style="text-transform: none !important">Solicite um orçamento personalizado</h3>
          <div class="contact-form">
             <form action="mailto:kuryart1@gmail.com" method="post" enctype="text/plain">
                <input type="text" name="name" placeholder="Nome" />
                <input type="email" name="mail" placeholder="Email" />
                <textarea name="comment" placeholder="Mensagem"></textarea>

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

 <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fas fa-level-up-alt"></i>
 </button>    
@endsection
