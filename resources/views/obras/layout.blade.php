<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('obras.head')
  </head>
  <body>
    @include('index.nav')
    @yield('content')
    @include('obras.scripts')
  </body>
</html>
