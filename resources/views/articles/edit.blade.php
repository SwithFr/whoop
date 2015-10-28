@extends( "layout" )

@section( "content" )

	<h1>Editer un article</h1>

	{!! Form::model($article, ['action' => ['ArticlesController@update',$article->id], 'class' => 'form-horizontal']) !!}
	{!! method_field( "PATCH" ) !!}
       @include( "articles.forms.article", ['submitButtonText' => 'Mettre à jour'] )
    {!! Form::close() !!}

@stop