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

        {{-- === PRODUTO ADD === --}}
        {{-- <script>
            // Get the modal
            var modal = document.getElementById("produto-modal-add");
            
            // Get the button that opens the modal
            var btn = document.getElementById("produto-btn-add");
            
            // Get the <span> element that closes the modal
            var span = document.getElementById("produto-close-add");

            // Get the btn-close element that closes the modal
            var btn-close = document.getElementById("produto-btn-close-add");            
            
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks on btn-close, close the modal
            btn-close.onclick = function() {
                modal.style.display = "none";
            }            
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
        </script> --}}

        <script>
            // Open the Modal
            var openTriggers = document.getElementsByClassName("open-modal");

            for(var i = 0; i < openTriggers.length; i++) {
                var currentOpenTrigger = openTriggers[i];

                currentOpenTrigger.onclick = function(event) { 
                    var modal;

                    if (event.target.hasAttribute("data-modal")) {
                        modal = document.getElementById(event.target.dataset.modal);
                    } else {
                        modal = document.getElementById(event.target.parentElement.dataset.modal);
                    }
                    
                    modal.style.display = "block";
                };
            }

            // Close the Modal
            var closeTriggers = document.getElementsByClassName("close-modal");

            for(var i = 0; i < closeTriggers.length; i++) {
                var currentCloseTrigger = closeTriggers[i];

                currentCloseTrigger.onclick = function(event) { 
                    var modal;

                    if (event.target.hasAttribute("data-modal")) {
                        modal = document.getElementById(event.target.dataset.modal);
                    } else {
                        modal = document.getElementById(event.target.parentElement.dataset.modal);
                    }
                    
                    modal.style.display = "none";
                };
            }

            // Close the Modal
            // var closeTriggers = document.getElementsByClassName("close-modal");

            // for(var i = 0; i < closeTriggers.length; i++) {
            //     var currentCloseTrigger = closeTriggers[i];

            //     currentCloseTrigger.onclick = function() { 
            //         var modal = document.getElementById(currentCloseTrigger.dataset.modal);
            //         modal.style.display = "none";
            //     };
            // }

            // // When the user clicks anywhere outside of the modal, close it
            // window.onclick = function(event) {
            // if (event.target == modal) {
            //     modal.style.display = "none";
            // }
            // }              

        </script>
    </body>
</html>
