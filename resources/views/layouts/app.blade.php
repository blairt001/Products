<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>products</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
</head>
<body>
    @include('inc.navbar')
<div class="container">
	<br />
    @if(Request::is('/'))
	 @include('inc.show')
	@endif
    <div class="row">
            @yield('content')
        <div class="col-md-8 col-lg-8">
        </div>
<div class="col-md-4 col-lg-4">
</div>
</div>
</div>
<footer id="footer" class="text-center">
  <p>Copyright 2018 &copy; Products</p>
	</footer>
</body>

</html>