@extends( "layout" )

@section( "content" )
	<h1>{{ $article->title }}</h1>
	<div class="body">
		{{ $article->body  }}
	</div>
@stop