@extends( "layout" )

@section( "content" )
	<form method="POST" class="form-horizontal" action="/auth/login">
	    {!! csrf_field() !!}

	    <div class="form-group">
	        <label class="label-control" for="email">Email</label>
	        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
	    </div>

	    <div class="form-group">
	        <label class="label-control" for="password">Password</label>
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