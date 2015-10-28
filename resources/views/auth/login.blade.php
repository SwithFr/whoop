@extends( "layout" )

@section( "content" )
	@include( "errors.loginErrors" )
	<form method="POST" class="form-horizontal" action="/auth/login">
	    {!! csrf_field() !!}

	    <div class="form-group {{ $errors->has('name') ? "has-error" : ''  }}">
	        <label class="control-label" for="name">Login</label>
	        <input class="form-control" name="name" value="{{ old('name') }}">
	    </div>

	    <div class="form-group {{ $errors->has('password') ? "has-error" : ''  }}">
	        <label class="control-label" for="password">Password</label>
	        <input class="form-control" type="password" name="password" id="password">
	    </div>

	    <div class="checkbox">
	        <input type="checkbox" name="remember"> Remember Me
	    </div>

	    <div>
	        <button class="btn btn-primary" type="submit">Login</button>
	    </div>
	</form>
@stop