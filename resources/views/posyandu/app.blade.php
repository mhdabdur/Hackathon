<!DOCTYPE html>
<html>
<head>

	<script src="/js/jquery.min.js"></script>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script src="/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<title>Laravel</title>
</head>
<body>
	<div class="col-md-2">
	  <ul class="nav nav-pills nav-stacked">
	    @include(Config::get('laravel-menu.views.bootstrap-items'), array('items' => $main->roots()))
	  </ul>
	</div>
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	  <script src="/js/jquery-ui.js"></script>
	  <script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
	  </script>
</body>
</html>