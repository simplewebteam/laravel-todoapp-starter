@extends('partials.bodywithoutsidenav')

@section('title', 'Password reset | ToDoApp')

@section('content')
<div class="container">
	<div class="row text-center">
		<div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-12 col-xs-12 panel-wrapper vh-align">
			<div class="panel panel-default bg-whitelight box-shadow">
				<div class="panel-heading">
				    Reset Password
				 </div>
				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

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

					<form class="form-horizontal" role="form" method="POST" action="/password/email">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">E-Mail&nbsp<i class="fa fa-envelope"></i></label>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="email" class="form-control icon" name="email" value="{{ old('email') }}" placeholder="e.g. youremail@whereever.com }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
								<button type="submit" class="btn btn-primary">
									Send Password Reset Link
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
