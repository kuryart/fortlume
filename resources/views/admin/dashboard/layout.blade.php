<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('admin.dashboard.head')
  </head>
  <body>
    @include('admin.dashboard.nav')
    @yield('content')
    @include('admin.dashboard.scripts')
  </body>
</html>
