@extends('partials.bodywithoutsidenav')

@section('content')

<div class="container">
    <div class="row text-center">
        <div id="brandintro" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img src="{{ asset('images/404.png') }}" alt="404" height="200" width="auto"/>
            <p class="">Well, this is embarrassing!</p>
            <h4 class="text-danger">404 Page not found...</h4>
            <p class="">it appears that the page you are trying to reach doesn't exist or currently unavailable.</p>
            <h2><a class="btn btn-success  bg-inherit text-success ls1-5" href="{{ url('/') }}">HOME PAGE</a></h2>
        </div>
    </div>
</div>

@stop