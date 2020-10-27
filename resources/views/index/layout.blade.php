<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('index.head')
  </head>
  <body>
    @include('index.nav')
    @yield('content')
    @include('index.scripts')
  </body>
</html>
