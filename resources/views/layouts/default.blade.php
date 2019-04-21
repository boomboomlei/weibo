
<html>
  <head>
    <title>@yield('title','web app')--王八蛋嘎嘎哥</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>


	@include('layouts._header')


	<div class="container">
    @yield('content')
    @include('layouts._footer')
	</div>
  </body>
</html>