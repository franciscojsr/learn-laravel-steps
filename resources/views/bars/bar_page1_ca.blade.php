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
        <a class="dropdown-toggle" data-toggle="dropdown" href="">Idiomes<span class="caret"></span></a>
        <ul class="dropdown-menu bandown fixdown">
            <div>@include('pages/flags')</div>
        </ul>
      </div>

      <ul class="nav navbar-nav navbarbrand cab2">
<?php   if(Request::path()=='ca'){ ?>
            <li class="active"> <a class="navbar-brand" href="/ca">@include('bars/iconimage') Aprendre Laravel</a> </li>
<?php   }else{ ?>
            <li> <a class="navbar-brand" href="/ca">@include('bars/iconimage') Aprendre Laravel</a> </li>
<?php   } ?>
      </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse cab2" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(Request::path()=='laravel_install_ca'){echo 'class="active"';}?> >
            <a href="/laravel_install_ca">Instal·lar Laravel</a>
        </li>
        <li <?php if(Request::path()=='vagrant_vm_ca'){echo 'class="active"';}?> >
            <a href="/vagrant_vm_ca">VM Homestead</a>
        </li>
        <li <?php if(Request::path()=='git_using_ca'){echo 'class="active"';}?> >
            <a href="/git_using_ca">Fer servir Git</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
