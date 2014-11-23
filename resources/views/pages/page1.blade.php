@extends('master')

@section('content')
<a name="#"></a><div><h1>Learning Laravel</h1><small class="lobster"># Posted on November 25, 2014 | By Francisco Salguero</small></div>

Learning Laravel. How to install Laravel, Vagrant and some commands to Git.

At first, Laravel needs Composer. You can know about composer --> <a href="https://getcomposer.org" >Composer</a>.

<h4 class="lobster">#<a href="/#laravel_install">Intallation Laravel</a></h4><h4 class="lobster">#<a href="/#vagrant_vm">VM Homestead</a></h4><h4 class="lobster">#<a href="/#git_using">Git</a></h4>


You can find this project created with Laravel and Bootstrap in Github. --> <a href="https://github.com/franciscojsr/learn-laravel-steps" target="_blank">Github Laravel</a>.
<a name="laravel_install"></a>
<hr style=" height: 2px; background-color: skyblue; -webkit-box-shadow: 0px 6px 12px skyblue; box-shadow: 0 6px 12px skyblue;">
@include('pages/install')
<a name="vagrant_vm"></a>
<hr style=" height: 2px; background-color: skyblue; -webkit-box-shadow: 0px 6px 12px skyblue; box-shadow: 0 6px 12px skyblue;">
@include('pages/vagrant')
<a name="git_using"></a>
<hr style=" height: 2px; background-color: skyblue; -webkit-box-shadow: 0px 6px 12px skyblue; box-shadow: 0 6px 12px skyblue;">
@include('pages/git')

@stop

