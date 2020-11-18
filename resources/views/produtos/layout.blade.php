<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('produtos.head')
  </head>
  <body>
    @include('index.nav')
    @yield('content')
    @include('produtos.scripts')
  </body>
</html>
