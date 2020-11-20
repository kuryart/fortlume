<script>
  function collapseMenu() {
     var x = document.getElementById("nav-bottom");
     if (x.className === "nav-bottom") {
        x.className += " responsive";
     } else {
        x.className = "nav-bottom";
     }
  }
</script>

<script>
   var timeoutHandle;
   var slideIndex = 0;
   var slides = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("dot");

   showSlide(slideIndex);
   startTimer();

   // Exibe slide
   function showSlide(n) {
      if (n >= slides.length) {
         slideIndex = 0;
      } else if (n < 0) {
         slideIndex = slides.length - 1;
      } else {
         slideIndex = n;
      }
      for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex].style.display = "block";
      dots[slideIndex].className += " active";      
   }

   // Inicia contagem
   function startTimer() {
      timeoutHandle = setInterval(function(){ showSlide(slideIndex += 1); }, 8000);
   }

   // Para contagem
   function stopTimer() {
      clearInterval(timeoutHandle);
   }

   // Passa o slide
   function plusSlide(n) {
      stopTimer();
      showSlide(slideIndex += n);
      startTimer()
   }

   // Mostra slide no index
   function currentSlide(n) {
      stopTimer();
      showSlide(n);
      startTimer()
   }

</script>

<script>
  //Get the button
  var mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
     mybutton.style.display = "block";
  } else {
     mybutton.style.display = "none";
  }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  }
</script>

<script>
   var splide = new Splide( '#splide', {
      type        : 'loop',
		fixedWidth  : 300,
		height      : 180,
		gap         : 10,
		cover       : true,
		focus       : 'center',
      pagination  : false,
		breakpoints : {
			'600': {
				fixedWidth: 150,
				height    : 90,
			}
		},
	} ).mount();

   // splide.on( 'click', function() {
   //    window.location = "http://www.google.com/";
   // } );

   var splideObras = new Splide( '#splide-obras', {
      pagination  : false,
      // rewind      : true,
      type        : 'loop',
   } ).mount();

</script>

<script>
   function goToCategoria(categoria) {
      window.location = categoria;
   }
</script>