<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="{{ route('home') }}">Website</a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="{{ route('article.index') }}">Manage Article</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>
