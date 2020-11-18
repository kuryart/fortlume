<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('produto.head')
  </head>
  <body>
    @include('index.nav')
    @yield('content')
    @include('produto.scripts')
  </body>
</html>
