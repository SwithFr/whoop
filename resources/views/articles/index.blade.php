@extends( "layout" )

@section( "content" )
	<h1>liste des articles</h1>

	@foreach( $articles as $a )
		<article>
				<h2><a href="{!! route('showArticle', ['id'=>$a->id]) !!}">{{ $a->title  }}</a></h2>
				<div>{{ $a->body }}</div>
		</article>
	@endforeach
@stop