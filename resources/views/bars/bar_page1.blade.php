<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="dropdown bandrop">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">Languages<span class="caret"></span></a>
        <div class="dropdown-menu bandown">
           @include('pages/flags')
        </div>
      </div>

      <ul class="nav navbar-nav navbarbrand cab2">
<?php   if(Request::path()=='/'){ ?>
            <li class="active"> <a class="navbar-brand" href="/">@include('bars/iconimage') Learn Laravel</a> </li>
<?php   }else{ ?>
            <li> <a class="navbar-brand" href="/">@include('bars/iconimage') Learn Laravel</a> </li>
<?php   } ?>
      </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse cab2" id="bs-example-navbar-collapse-1">
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
      </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
