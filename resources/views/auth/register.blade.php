@extends('partials.bodywithoutsidenav')

@section('title', 'Register')

@section('content')

<div class="home">
<div class="container">
    <div class="row text-center">
		<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 panel-wrapper vh-align">
			<div class="panel panel-default bg-whitelight box-shadow ">
				<div class="panel-heading">
				    ToDoApp Register
				</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">Name</label>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" class="form-control icon" name="name" value="{{ old('name') }}" placeholder="Michael">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">E-Mail Address&nbsp<i class="fa fa-envelope"></i></label>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="michael@example.com">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">Password&nbsp<i class="fa fa-key"></i></label>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="password" class="form-control" name="password" placeholder="onlymichaelknows">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">Confirm Password&nbsp<i class="fa fa-key"></i></label>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="password" class="form-control icon" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<button type="submit" class="btn btn-block btn-green">
									Register
								</button>
							</div>
						</div>

						<div class="form-group">
                            <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
                                <a href="{{ url('/auth/login') }}" class="btn btn-block btn-cyan">Login</a>
                            </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
