<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- === Font Awesome === -->
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        @livewireStyles        

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="/js/Sortable.js"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script>
            var categoria = document.getElementById("categoria-ul");
            if(categoria) {
                var sortable = Sortable.create(categoria);      

                var produtos = document.getElementsByClassName("grid");
                for (var i = 0; i < produtos.length; i++) {
                    new Sortable(produtos[i], {
                        group: 'nested',
                        animation: 150,
                        fallbackOnBody: true,
                        swapThreshold: 0.65
                    });
                }
            }
        </script>

        <script>
            function findByAttributeInParent(el, attr) {        
                if (el.hasAttribute(attr)) {
                    console.log(el);
                    console.log(attr);
                    console.log(el.dataset.modal);
                    return document.getElementById(el.dataset.modal);
                }

                while (el.parentNode) { 
                    el = el.parentNode;
                    if (el.hasAttribute(attr))
                        console.log(el);
                        console.log(attr);
                        return document.getElementById(el.dataset.modal);
                }
                console.log(el);
                console.log(attr);
                return null;
            }

            function findByAttributeInParent2(el, attr) {        
                if (el.hasAttribute(attr)) {
                    return el.getAttribute(attr);
                }

                while (el.parentNode) { 
                    el = el.parentNode;
                    if (el.hasAttribute(attr)) {
                        return el.getAttribute(attr);
                    }
                }
                return null;
            }            

            // Open the Modal
            var openTriggers = document.getElementsByClassName("open-modal");

            for(var i = 0; i < openTriggers.length; i++) {
                var currentOpenTrigger = openTriggers[i];

                currentOpenTrigger.onclick = function(event) { 
                    var modal = findByAttributeInParent(event.target, "data-modal");
                    console.log(modal);

                    if (modal.id === "categoria-modal-edit") {
                        var form = document.getElementById("categoria-form-edit");
                        var categoriaId = findByAttributeInParent2(event.target, "data-categoriaId");                        
                        var action = "{{ route('categorias.update', '||x||') }}";
                        var newAction = action.replace("||x||", categoriaId);                        
                        form.setAttribute("action", newAction);
                    } else if (modal.id === "categoria-modal-delete") {
                        var form = document.getElementById("categoria-form-delete");
                        var categoriaId = findByAttributeInParent2(event.target, "data-categoriaId");                        
                        var action = "{{ route('categorias.destroy', '||x||') }}";
                        console.log(action);
                        var newAction = action.replace("||x||", categoriaId);
                        console.log(newAction);
                        form.setAttribute("action", newAction);
                    } else if (modal.id === "produto-modal-edit") {
                        var form = document.getElementById("produto-form-edit");
                        var produtoId = findByAttributeInParent2(event.target, "data-produtoId");                        
                        var action = "{{ route('produtos.update', '||x||') }}";
                        var newAction = action.replace("||x||", produtoId);                        
                        form.setAttribute("action", newAction);
                    } else if (modal.id === "produto-modal-delete") {
                        var form = document.getElementById("produto-form-delete");
                        var produtoId = findByAttributeInParent2(event.target, "data-produtoId");                        
                        var action = "{{ route('produtos.destroy', '||x||') }}";
                        var newAction = action.replace("||x||", produtoId);                        
                        form.setAttribute("action", newAction);
                    } else if (modal.id === "obra-modal-delete") {
                        var form = document.getElementById("obra-form-delete");
                        var produtoId = findByAttributeInParent2(event.target, "data-obraId");                        
                        var action = "{{ route('obras.destroy', '||x||') }}";
                        var newAction = action.replace("||x||", produtoId);                        
                        form.setAttribute("action", newAction);
                    }

                    modal.style.display = "block";
                };
            }

            // Close the Modal
            var closeTriggers = document.getElementsByClassName("close-modal");

            for(var i = 0; i < closeTriggers.length; i++) {
                var currentCloseTrigger = closeTriggers[i];

                currentCloseTrigger.onclick = function(event) { 
                    var modal = findByAttributeInParent(event.target, "data-modal");
                    // findByTagInChild(modal, "form").reset();

                    var forms = document.getElementsByClassName("forms");

                    for (var j = 0; j < forms.length; j++) {
                        forms[j].reset();
                    }

                    modal.style.display = "none";
                };
            }

            // // When the user clicks anywhere outside of the modal, close it
            // window.onclick = function(event) {
            // if (event.target == modal) {
            //     modal.style.display = "none";
            // }
            // }              

        </script>

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
    </body>
</html>
