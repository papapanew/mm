<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','皮卡丘')--梦开始的地方</title>
  <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      @include('shared._messages')  
      @yield('content')
      @include('layouts._footer')
    </div>    
    <script src="/js/app.js"></script>
  </body>
</html>