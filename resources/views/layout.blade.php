<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    @include('style-sheet')
  </head>
    <body>
      @include('nav')
      <div class = 'container'>
        @yield('content')
      </div>
    </body>

</html>
