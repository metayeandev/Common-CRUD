@extends('layouts.master')
@section('title', 'Article')
@section('content')

	<h3>Manage Article</h3>
	<a href="{{ route('article.create') }}" class="btn btn-xs btn-default">+ Add Content</a>
	<hr>
	@if (session('msg'))
		<div class="alert alert-success">
		  {{ session('msg') }}
		</div>
	@endif
	<table class="table">
		<thead>
			<tr>
				<td>No.</td>
				<td>Title</td>
				<td>Author</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach($articles as $key => $article)
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $article->title }}</td>
				<td>{{ $article->author }}</td>
				<td>
					<a href="{{ route('article.show',$article->id) }}" class="btn btn-xs btn-primary">show</a>
					<a href="{{ route('article.edit', $article->id) }}" class="btn btn-xs btn-warning">edit</a>
					{!! Form::open(['route' => ['article.delete', $article->id], 'method' => 'delete']) !!}
						{!! Form::submit('del', ['class' => 'btn btn-xs btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop