@extends( "layout" )

@section( "content" )
	<h1>liste des articles</h1>

	<div class="row">
		<p>
			<a class="btn btn-default" href="{!! route('articles.create') !!}">Créer un article</a>
		</p>
	</div>
	@forelse($articles as $a )
		<article class="row">
			<div class="col-lg-9">
				<h2><a href="{!! route('articles.show', ['id'=>$a->id]) !!}">{{ $a->title  }}</a></h2>
                <div class="time">
                    <p>Mis en ligne {!! $a->published_at->diffForHumans() !!}</p>
                </div>
				<div class="body">{{ $a->body }}</div>
			</div>
			<div class="col-lg-3">
				<a class="btn btn-warning" href="{!! route( 'articles.edit', ['id' => $a->id] ) !!}">Modifier</a>
				<a class="btn btn-danger" href="{!! route( 'articles.destroy', ['id' => $a->id] ) !!}">Supprimer</a>
			</div>
		</article>
	@empty
		<div class="alert alert-warning">
			<p>Oups ! Il semblerait qu'il n'ait aucun article lisible pour le moment</p>
		</div>
	@endforelse

@stop