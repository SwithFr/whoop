@extends( "layout" )

@section( "content" )

	<h1>Ajouter un nouvel article</h1>

	{!! Form::open(['action' => 'ArticlesController@store']) !!}
		{!! Form::label('title','Titre') !!}
		{!! Form::text('title') !!}
		{!! Form::label('date','Date de publication') !!}
		{!! Form::input('date', 'published_at', Carbon\Carbon::now()) !!}
		{!! Form::label('content', 'Contenu') !!}
		{!! Form::textarea('body') !!}
		{!! Form::submit('Ajouter') !!}
	{!! Form::close() !!}

@stop