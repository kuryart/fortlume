<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('dashboard.head')
  </head>
  <body>
    @include('dashboard.nav')
    @yield('content')
    @include('dashboard.scripts')
  </body>
</html>
