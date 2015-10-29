@extends( "layout" )

@section( "content" )

	<h1>Editer un article</h1>

	{!! Form::model($article, ['action' => ['ArticlesController@update',$article->slug], 'class' => 'form-horizontal']) !!}
	{!! method_field('PATCH') !!}
       @include( "articles.forms.article", ['submitButtonText' => 'Mettre à jour', 'date' => $article->published_at->toDateString()] )
    {!! Form::close() !!}

@stop