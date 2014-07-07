<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Mallory Weatherston</title>

    <!-- Bootstrap core CSS -->
    <link href="/spot/theme/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/spot/theme/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/spot/theme/assets/css/main.css" rel="stylesheet">

</head>
<body>
	

		
	 <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home">MALL<i class="fa fa-circle"></i>RY</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/">HOME</a></li>
            <li><a href="/resume">RÉSUMÉ</a></li>
            <li><a href="/portfolio">PORTFOLIO</a></li>
            <li><a href="/posts">BLOG</a></li>
            	
            	@if (Auth::check())
		 		<!-- user is logged in -->
					<li>{{ link_to_action('HomeController@logout', 'LOG OUT') }}</li>
					<li>{{ Auth::user()->email }}<br>
					{{ link_to_action('PostsController@create', 'Create a New Post') }}</li>
				@else
   				<!-- user not NOT logged in -->
    				<li>{{ link_to_action('HomeController@showLogin', 'LOG IN') }}</li>
    			@endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div>
    	<br>
    	 @if (Session::has('successMessage'))
    		<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
    		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
	</div>

    
    @yield('content')

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>