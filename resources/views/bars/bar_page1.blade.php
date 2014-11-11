<ul class="nav navbar-nav">
    <li <?php if(Request::path()=='/'){echo 'class="active"';}?> >
        <a href="/">Learn Laravel</a>
    </li>
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

    <!-- shows the url complete -->
    <!--
            <li> <?php // echo Request::url(); ?> </li>
            <li> <?php //echo URL::current(); ?> </li>
    -->
    <!-- shows only the path route -->
    <!--
            <li> <?php //echo Request::path(); ?> </li>
    -->

</ul>
