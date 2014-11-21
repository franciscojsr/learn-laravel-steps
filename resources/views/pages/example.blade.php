<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/exemple.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>

  <body>

            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                    <a href="#">2-level Dropdown <i class="icon-arrow-right"></i></a>
                    <ul class="dropdown-menu sub-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <ul class="nav navbar-nav">
            <li <?php if(Request::path()=='example'){echo 'class="active"';}?>>
      <a class="navbar-brand" href="#"><img <?php if(Request::path()=='/'){echo 'src="/images/logo-head-blue2.png"';}
            else{echo 'src="/images/logo-head-blue1.png"';}?> > Learn Laravel</a>
            </li>
            </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
                    <li <?php if(Request::path()=='laravel_install'){echo 'class="active"';}?> >
                        <a href="/laravel_install">Install Laravel</a>
                    </li>
                    <li <?php if(Request::path()=='vagrant_vm'){echo 'class="active"';}?> >
                        <a href="/vagrant_vm">VM Homestead</a>
                    </li>
                    <li <?php if(Request::path()=='git_using'){echo 'class="active"';}?> >
                        <a href="/git_using">Using Git</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Menu 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Submenu 1-1</a></li>
                            <li><a href="#">Submenu 1-2</a></li>
                            <li><a href="#">Submenu 1-3</a></li>
                        </ul>
                    </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




  </body>
</html>
