<div id="header" class="header">

   <div class="nav-main">
      <div class="nav-left">
         <a href="#"><img src="{{ asset('img/logo-fortlume.png') }}"/></a>
      </div>
      <div class="nav-right">
         <div class="nav-top">
            <a href="tel:551433067886">
               <img src="{{ asset('img/phone_icon.png') }}" alt="#" /> (14) 3306-7886
            </a>
            <a href="https://wa.me/5514981961060">
               <img src="{{ asset('img/phone_icon.png') }}" alt="#" /> (14) 99803-2135
            </a>
         </div>
         <div class="nav-bottom" id="nav-bottom">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}/#quem-somos">Quem Somos</a>

            <div class="dropdown">
               <button onclick="document.location='{{ route('produtos.view') }}'" class="dropbtn">Produtos</button>
               <div class="dropdown-content">
                  @foreach ($categorias as $categoria)
                     <a href="{{ route('categorias.getByIndex', $categoria->id) }}">{{ $categoria->nome }}</a>
                  @endforeach
               </div>
            </div>

            <a href="{{ route('obras.view') }}">Obras</a>
            <a href="{{ route('home') }}/#orcamento">Orçamentos</a>
            <a href="{{ route('home') }}/#contato">Contato</a>
            <a href="javascript:void(0);" class="icon" onclick="collapseMenu()">
               <i class="fa fa-bars"></i>
             </a>                  
         </div>               
      </div>
   </div>

</div>
