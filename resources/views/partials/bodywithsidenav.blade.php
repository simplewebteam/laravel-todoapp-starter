@extends('app')

@section('bodycontent')

@include('pages.navigation.topnav')

@include('pages.navigation.sidenav')

@include('partials.notifications')

@yield('content')

@include('partials.scripts')

@stop