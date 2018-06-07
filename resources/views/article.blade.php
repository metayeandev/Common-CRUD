@extends('layouts.master')
@section('title', 'Article')
@section('content')

<div class="content">
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h4>Article : {{ $article->title }}</h4>
	  </div>
	  <div class="panel-body">
	  	<div>Title: {{ $article->title }}</div>
	  	<div>Author : {{ $article->author }}</div>
	  	<div>Article : </div>
	  	<div class="article">
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

@stop