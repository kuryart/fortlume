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
        </script>

        <script>
            function findByAttributeInParent(el, attr) {        
                if (el.hasAttribute(attr)) {
                    return document.getElementById(el.dataset.modal);
                }

                while (el.parentNode) { 
                    el = el.parentNode;
                    if (el.hasAttribute(attr))
                        return document.getElementById(el.dataset.modal);
                }
                return null;
            }

            function findByAttributeInParent2(el, attr) {        
                if (el.hasAttribute(attr)) {
                    return el.getAttribute("data-categoriaId");
                }

                while (el.parentNode) { 
                    el = el.parentNode;
                    if (el.hasAttribute(attr)) {
                        return el.getAttribute("data-categoriaId");
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

                    if (modal.id === "categoria-modal-edit") {
                        var form = document.getElementById("categoria-form-edit");
                        var categoriaId = findByAttributeInParent2(event.target, "data-categoriaId");                        
                        var action = "{{ route('categorias.update', '||x||') }}";
                        var newAction = action.replace("||x||", categoriaId);                        
                        form.setAttribute("action", newAction);
                        // INPUTS
                        var nome = document.getElementById("categoria-edit-nome");                        
                    } else if (modal.id === "categoria-modal-delete") {
                        var form = document.getElementById("categoria-form-delete");
                        var categoriaId = findByAttributeInParent2(event.target, "data-categoriaId");                        
                        var action = "{{ route('categorias.destroy', '||x||') }}";
                        console.log(action);
                        var newAction = action.replace("||x||", categoriaId);
                        console.log(newAction);
                        form.setAttribute("action", newAction);
                    } else if (modal.id === "produto-modal-edit") {
                        // ACTION
                        var form = document.getElementById("produto-form-edit");
                        var produtoId = findByAttributeInParent2(event.target, "data-produtoId");                        
                        var action = "{{ route('produtos.update', '||x||') }}";
                        var newAction = action.replace("||x||", produtoId);                        
                        form.setAttribute("action", newAction);
                        // INPUTS
                        var nome = document.getElementById("produto-edit-nome");
                        var descricao = getElementById("produto-edit-descricao");
                        var categoria = getElementById("produto-edit-categoria");
                        var foto = getElementById("produto-edit-foto");

                        // nome.setAttribute("value", produtoId);

                    } else if (modal.id === "produto-modal-delete") {
                        var form = document.getElementById("produto-form-delete");
                        var produtoId = findByAttributeInParent2(event.target, "data-produtoId");                        
                        var action = "{{ route('produtos.destroy', '||x||') }}";
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
    </body>
</html>
