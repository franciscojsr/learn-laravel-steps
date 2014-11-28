@extends('......master')

@section('barra')
@include('......bars.bar_page1')
@stop

@section('content')
@include('pages/en/install')
@stop

@section('profile')
@include('pages/myprofile/profile')
@stop

@section('footer')
Learn Laravel
@stop