@extends('......master')

@section('barra')
@include('......bars.bar_page1_es')
@stop

@section('content')
<a name="#"></a><div><h1 class="cab">Aprender Laravel</h1><small class="lobster siz"># Publicado 28 de Noviembre, 2014 | Francisco Salguero</small></div>
<hr class="lin">
Aprendrer Laravel. Como instalar Laravel, Vagrant y usar algunos comandos de Git.

Laravel necesita Composer. <img class="flet" src="/images/fletxa2.png"> <a href="https://getcomposer.org" target="_blank">Composer</a>.

Este tutorial es para sistemas UNIX. Para instalar Composer en Windows puedes ir a  <a href="https://getcomposer.org/doc/00-intro.md#installation-windows" target="_blank">Composer Windows.</a>

<h4 class="lobster">#<a href="#laravel_install">Instalar Laravel</a></h4><h4 class="lobster">#<a href="#vagrant_vm">VM Homestead</a></h4><h4 class="lobster">#<a href="#git_using">Git</a></h4>

Puedes encontrar esta App creada con Laravel y Bootstrap en Github. <img class="flet" src="/images/fletxa2.png"> <a href="https://github.com/franciscojsr/learn-laravel-steps" target="_blank"> Ver el código fuente en Github</a>.
<a name="laravel_install"></a>
<hr class="lineup">
@include('pages/es/install_es')
<a name="vagrant_vm"></a>
<hr class="lineup">
@include('pages/es/vagrant_es')
<a name="git_using"></a>
<hr class="lineup">
@include('pages/es/git_es')

@stop

@section('profile')
@include('pages/myprofile/profile_es')
@stop

@section('footer')
Aprender Laravel
@stop