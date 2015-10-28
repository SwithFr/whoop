@extends( "layout" )

@section( "content" )
	<form method="POST" class="form-horizontal" action="/auth/register">
	    {!! csrf_field() !!}

	    <div class="form-group">
	         <label class="label-control" for="name">Name</label>
	        <input type="text" name="name" value="{{ old('name') }}">
	    </div>

	    <div class="form-group">
	        <label class="label-control" for="email">Email</label>
	        <input type="email" name="email" value="{{ old('email') }}">
	    </div>

	    <div class="form-group">
	        <label class="label-control" for="password">Password</label>
	        <input type="password" name="password">
	    </div>

	    <div class="form-group">
	        <label class="label-control" for="password_confirmation">Confirm Password</label>
	        <input type="password" name="password_confirmation">
	    </div>

	    <div class="form-group">
	        <button class="btn btn-primary" type="submit">Register</button>
	    </div>
	</form>
@stop