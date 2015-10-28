<div class="form-group">
	{!! Form::label('title','Titre', ['class' => 'control-label']) !!}
	{!! Form::text('title', null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('date','Date de publication') !!}
	{!! Form::input('date', 'published_at', $date, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Contenu') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>
