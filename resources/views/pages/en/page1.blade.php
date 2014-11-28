@extends('......master')

@section('barra')
@include('......bars.bar_page1')
@stop

@section('content')
<a name="#"></a><div><h1 class="cab">Learning Laravel</h1><small class="lobster siz"># Posted on November 28, 2014 | By Francisco Salguero</small></div>
<hr class="lin">
Learning Laravel. How to install Laravel, Vagrant and use some commands to Git.

Laravel needs Composer. <img class="flet" src="/images/fletxa2.png"><a href="https://getcomposer.org" target="_blank">Composer</a>

This tutorial is for UNIX systems. On Windows you can install Composer in <a href="https://getcomposer.org/doc/00-intro.md#installation-windows" target="_blank">Composer windows. </a>

<h4 class="lobster">#<a href="#laravel_install">Installation Laravel</a></h4><h4 class="lobster">#<a href="#vagrant_vm">VM Homestead</a></h4><h4 class="lobster">#<a href="#git_using">Git</a></h4>

You can find this App created with Laravel and Bootstrap on Github. <img class="flet" src="/images/fletxa2.png"><a href="https://github.com/franciscojsr/learn-laravel-steps" target="_blank">View the source on Github</a>
<a name="laravel_install"></a>
<hr class="lineup">
@include('pages/en/install')
<a name="vagrant_vm"></a>
<hr class="lineup">
@include('pages/en/vagrant')
<a name="git_using"></a>
<hr class="lineup">
@include('pages/en/git')

@stop

@section('profile')
@include('pages/myprofile/profile')
@stop

@section('footer')
Learn Laravel
@stop
