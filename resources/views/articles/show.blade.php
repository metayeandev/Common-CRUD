@extends('layouts.master')
@section('title', 'Article')
@section('content')

<a href="{{ route('article.index') }}" class="btn btn-xs btn-default">Back</a>
<br><br>
<div class="panel panel-default">
  <div class="panel-heading">Articl Info</div>
  <div class="panel-body">
  	<div>Title : {{ $article->title }}</div>
  	<div>Author : {{ $article->author }}</div>
  	<div>Article : </div>
		<div>{{ $article->article }}</div>
  </div>
</div>

@stop