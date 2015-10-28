@extends( "layout" )

@section( "content" )
	@include( "errors.loginErrors" )
	<form method="POST" class="form-horizontal" action="/auth/register">
	    {!! csrf_field() !!}

	    <div class="form-group {{ $errors->has('name') ? "has-error" : ''  }}">
	         <label class="control-label" for="name">Name</label>
	        <input type="text" name="name" value="{{ old('name') }}">
	    </div>

	    <div class="form-group {{ $errors->has('email') ? "has-error" : ''  }}">
	        <label class="control-label" for="email">Email</label>
	        <input type="email" name="email" value="{{ old('email') }}">
	    </div>

	    <div class="form-group {{ $errors->has('password') ? "has-error" : ''  }}">
	        <label class="control-label" for="password">Password</label>
	        <input type="password" name="password">
	    </div>

	    <div class="form-group {{ $errors->has('password_confrimation') ? "has-error" : ''  }}">
	        <label class="control-label" for="password_confirmation">Confirm Password</label>
	        <input type="password" name="password_confirmation">
	    </div>

	    <div class="form-group">
	        <button class="btn btn-primary" type="submit">Register</button>
	    </div>
	</form>
@stop