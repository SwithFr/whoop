@extends( "layout" )

@section( "content" )

	<h1>Ajouter un nouvel article</h1>

	{!! Form::open(['action' => 'ArticlesController@store']) !!}
		@include( "articles.forms.article", ['submitButtonText' => 'Ajouter cet article'] )
	{!! Form::close() !!}

@stop