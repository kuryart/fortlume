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

{{-- <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 8000); // Change image every 8 seconds
  }     
</script> --}}

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

{{-- <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
modal.style.display = "none";
}
</script> --}}

<script>
   // Helper functions
   let qs = (selector, context = document) => context.querySelector(selector);
   let qsa = (selector, context = document) =>
   Array.from(context.querySelectorAll(selector));
   // Get gallery item into Lightbox
   function openLightbox(e) {
   const gitem = e.currentTarget,
      itemimg = qs("img", gitem),
      itemtext = qs(".gallery-item-text", gitem),
      itemUrl = itemtext.dataset.url;
   // Fill in the elements of lightbox.
   const lightbox = qs(".lightbox"),
      lightboximg = qs(".lb-img", lightbox),
      lightboxtext = qs(".lb-text", lightbox),
      lightboxDataURL = qs(".lb-url", lightbox);
   lightboximg.onload = () => {
      // fires as soon as image.src is assigned a URL.
      lightboxtext.innerHTML = itemtext.innerHTML;
      lightboxDataURL.setAttribute("href", itemUrl);
      lightbox.classList.add("open");
   };
   // Assigns a relative url. This will fire onload.
   lightboximg.setAttribute("src", itemimg.getAttribute("src"));
   }
   function closeLightbox(e) {
   e.preventDefault();
   const lightbox = e.currentTarget.closest(".lightbox");
   lightbox.classList.remove("open");
   }
   document.addEventListener("DOMContentLoaded", () => {
   const lightbox = qs(".lightbox.preload");
   if (lightbox) lightbox.classList.remove("preload");
   const gitems = qsa(".gallery-item");
   gitems.forEach((el) => el.addEventListener("click", openLightbox));
   const lbclose = qs(".lightbox .close");
   if (lbclose) lbclose.addEventListener("click", closeLightbox);
   });   
</script>

<script>
   var modal = document.getElementById("produto-modal");
   var openTriggers = document.getElementsByClassName("produto-img");

   for(var i = 0; i < openTriggers.length; i++) {
         var currentOpenTrigger = openTriggers[i];

         currentOpenTrigger.onclick = function(event) {                        
            var img = document.getElementById(event.target.id);
            var modalImg = document.getElementById("produto-modal-img");
            var captionText = document.getElementById("caption");

            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
         };
   }

   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];
   
   // When the user clicks on <span> (x), close the modal
   span.onclick = function() { 
     modal.style.display = "none";
   }
</script>

<script>
   // Wrap every letter in a span
   var textWrapper = document.querySelector('.ml7 .letters');
   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

   anime.timeline({loop: false})
   .add({
      targets: '.ml7 .letter',
      translateY: ["1.1em", 0],
      translateX: ["0.55em", 0],
      translateZ: 0,
      rotateZ: [180, 0],
      duration: 750,
      easing: "easeOutExpo",
      delay: (el, i) => 100 * i
   });   
</script>