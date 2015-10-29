@extends( "layout" )

@section( "content" )
	<article class="col-lg-9">
		<h1>{{ $article->title }}</h1>
		<div class="time">
            <p class="text-muted">Mis en ligne par <span class="text-primary">{{ $article->user->name }}</span> {!! $article->published_at->diffForHumans() !!}</p>
        </div>
        <div class="body lead">
            {{ $article->body  }}
        </div>
	</article>
	@if(Auth::check())
        <div class="col-lg-3">
            <a class="label label-warning" href="{!! route( 'articles.edit', ['slug' => $article->slug] ) !!}">Modifier</a>
            <a class="label label-danger" href="{!! route( 'articles.destroy', ['slug' => $article->slug] ) !!}">Supprimer</a>
        </div>
    @endif
@stop