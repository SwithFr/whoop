@extends( "layout" )

@section( "content" )
	<h1>liste des articles</h1>

	@forelse($articles as $a )
		<article>
				<h2><a href="{!! route('articles.show', ['id'=>$a->id]) !!}">{{ $a->title  }}</a></h2>
				<div>{{ $a->body }}</div>
		</article>
	@empty
		<div class="alert alert-warning">
			<p>Oups ! Il semblerait qu'il n'ait aucun article lisible pour le moment</p>
		</div>
	@endforelse

	<div>
		<p>
			<a class="btn btn-default" href="{!! route('articles.create') !!}">Créer un article</a>
		</p>
	</div>
@stop