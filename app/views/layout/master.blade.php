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
          <a class="navbar-brand" href="#">MALL<i class="fa fa-circle"></i>RY</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="blog.dev">HOME</a></li>
            <li><a href="spot/theme/about.html">ABOUT</a></li>
            <li><a href="spot/theme/services.html">RESUME</a></li>
            <li><a href="spot/theme/works.html">PORTFOLIO</a></li>
            <li><a href="spot/theme/about.html">BLOG</a></li>
            <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <br>
    
    @yield('content')

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>