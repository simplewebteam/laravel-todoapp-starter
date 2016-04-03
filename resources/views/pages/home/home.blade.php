@extends('partials.bodywithoutsidenav')

@section('title', 'Home | ToDoApp')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-left vh-align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jumbotron bg-inherit text-white">
                    <div class="container">
                        <h1>24&nbsp;h<i class="fa fa-clock-o"></i>urs<sup><em class="font70"><span class="text-cyan">beta</span></em></sup>&nbsp;</h1>
                        <p>Get Shit Done!</p>
                        <p>
                            <a href="{{ url('auth/login') }}" class="btn btn-cyan">Login</a>
                            <a href="{{ url('auth/register') }}" class="btn btn-green">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop