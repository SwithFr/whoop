@extends( "layout" )

@section( "content" )
	<h1>liste des articles</h1>

	@forelse($articles as $a )
		<article class="row">
			<div class="col-lg-9">
				<h2><a href="{!! route('articles.show', ['slug'=>$a->slug]) !!}">{{ $a->title  }}</a></h2>
                <div class="time">
                    <p class="text-muted">Mis en ligne par <span class="text-primary">{{ $a->user->name }}</span> {!! $a->published_at->diffForHumans() !!}</p>
                </div>
				<div class="body lead">{{ $a->body }}</div>
			</div>
			@if(Auth::check())
				<div class="col-lg-3">
					<a class="label label-warning" href="{!! route( 'articles.edit', ['slug' => $a->slug] ) !!}">Modifier</a>
					<a class="label label-danger" href="{!! route( 'articles.destroy', ['slug' => $a->slug] ) !!}">Supprimer</a>
				</div>
			@endif
		</article>
	@empty
		<div class="alert alert-warning">
			<p>Oups ! Il semblerait qu'il n'ait aucun article lisible pour le moment</p>
		</div>
	@endforelse

@stop