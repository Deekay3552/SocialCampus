<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
  <head>
    @include('partials._head')
  </head>
  <body>
    @include('partials._navbar')
    @yield('content')
    @include('partials._footer')
    @include('partials._scripts')
  </body>
</html>
