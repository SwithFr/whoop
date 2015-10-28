@if(count($errors))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $e)
				<li>{!! $e !!}</li>
            @endforeach
		</ul>
	</div>
@else
	<div class="alert alert-success">
		<p>Tout est ok !</p>
	</div>
@endif