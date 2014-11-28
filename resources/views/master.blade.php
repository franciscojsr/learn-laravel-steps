<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel PHP Framework</title>
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link href="css/code.css" rel="stylesheet">
   	<link rel="icon" href="images/logo-head-blue2.ico" type="image/x-icon" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/language_ajax.js"></script>
    <script src="js/totop.js"></script>
    <script>


    </script>

</head>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <noscript>
                    <div id="errorjs">You don't have javascript activated!! To use this web completely you have to enable JS!!</div>
            </noscript>
            @yield('barra')
        </nav>

        <div class="container"></div>

        <div class="container-fluid">
            <div class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
              <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
                    <pre><div id="simbol"></div>@yield('content')</pre>
              </div>
              <!-- Optional: clear the XS cols if their content doesn't match in height -->
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                @yield('profile')
              </div>
            </div>
        </div>

        <footer class="panel-footer">
            <div>
                <a href="http://www.laravel.com" target="_blank"><img src="/images/logo-head-blue2.png"> @yield('footer')</a>
            </div>
        </footer>
</body>
</html>