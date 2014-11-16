<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/code.css" rel="stylesheet">
   	<link rel="icon" href="images/logo-head-blue2.ico" type="image/x-icon" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			/*text-align:center;*/
			color: #999;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}

	</style>
</head>
<body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <noscript>
                    <div class="errorjs">No tienes javascript habilitado!! To use this web completely you have to enable JS!!</div>
            </noscript>

            @include('bars/bar_page1')

        </nav>

        <div class="container"></div>

        <div class="container-fluid">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-8">@yield('content')</div>
              <!-- Optional: clear the XS cols if their content doesn't match in height -->
              <div class="clearfix visible-xs-block"></div>
              <div class="col-md-3">@include('pages/profile')</div>
            </div>
        </div>

        <footer class="panel-footer navbar2">
            <div>
                    <a href="http://www.laravel.com"><img src="/images/logo-head-blue2.png"> Learn Laravel</a>
            </div>
        </footer>


</body>
</html>