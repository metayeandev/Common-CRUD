@extends('layouts.master')
@section('title', 'Article')
@section('content')

<div class="content">
	<div class="row">
		@foreach($articles as $key => $article)
			
				<div class="col-md-4">
					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<a href="{{ route('article',$article->id) }}"><h4>Article : {{ $article->title }}</h4></a>
					  </div>
					  <div class="panel-body">
					  	<div>Title: {{ $article->title }}</div>
					  	<div>Author : {{ $article->author }}</div>
					  	<div>Intro : </div>
					  	<div class="example-article">
					  		{{ $article->article }}
					  	</div>
					  </div>
					  <div class="panal-footer">
					  	<div class="container">
					  		<div>
					  			created at: {{ $article->created_at }}
					  		</div>
					  		<div>
					  			updated at: {{ $article->updated_at }}
					  		</div>
					  	</div>
					  </div>
					</div>
				</div>

		@endforeach()
	</div>
</div>

@stop