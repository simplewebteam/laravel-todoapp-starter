@extends('app')

@section('bodycontent')

@include('pages.navigation.topnav')

@yield('content')

@include('partials.scripts')

@stop