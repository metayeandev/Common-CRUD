@extends('layouts.master')
@section('title', 'Article')
@section('content')

	<div class="section-form">
		{!! Form::open(['route' => 'article.store', 'method' => 'post']) !!}

		<div class="form-group">
			{!! Form::label('title', 'title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('author', 'author') !!}
			{!! Form::text('author', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('article', 'article') !!}
			{!! Form::textarea('article', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group align-center">
			{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
		</div>
	</div>

@stop