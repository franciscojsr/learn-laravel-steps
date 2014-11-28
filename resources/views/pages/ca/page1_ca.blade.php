@extends('......master')

@section('barra')
@include('......bars.bar_page1_ca')
@stop

@section('content')
<a name="#"></a><div><h1 class="cab">Aprendre Laravel</h1><small class="lobster siz"># Publicat el 28 de Novembre, 2014 | Francisco Salguero</small></div>
<hr class="lin">
Aprendre Laravel. Com instal·lar Laravel, Vagrant i fer servir algunes ordres sobre Git.

Laravel necessita Composer.<img class="flet" src="/images/fletxa2.png"> <a href="https://getcomposer.org" target="_blank">Composer</a>.

Aquest tutorial és per a sistemes UNIX. A Windows pots instal·lar Composer a <a href="https://getcomposer.org/doc/00-intro.md#installation-windows" target="_blank">Composer Windows.</a>

<h4 class="lobster">#<a href="#laravel_install">Instal·lació Laravel</a></h4><h4 class="lobster">#<a href="#vagrant_vm">VM Homestead</a></h4><h4 class="lobster">#<a href="#git_using">Git</a></h4>

Pots trobar aquesta App creada amb Laravel i Bootstrap a Github. <img class="flet" src="/images/fletxa2.png"> <a href="https://github.com/franciscojsr/learn-laravel-steps" target="_blank"> Veure el codi font a Github</a>.
<a name="laravel_install"></a>
<hr class="lineup">
@include('pages/ca/install_ca')
<a name="vagrant_vm"></a>
<hr class="lineup">
@include('pages/ca/vagrant_ca')
<a name="git_using"></a>
<hr class="lineup">
@include('pages/ca/git_ca')

@stop

@section('profile')
@include('pages/myprofile/profile_ca')
@stop

@section('footer')
Aprendre Laravel
@stop