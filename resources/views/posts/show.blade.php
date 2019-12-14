@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<div class="row">
	<div class="col-lg-9">
		<h1 class="post-title">{{$post->title}}</h1>
		<img style="width:100%; height:80%;" src="/storage/cover_image/{{$post->cover_image}}">

		<div style="font-size:1.5em;">
			{{$post->body}}
		</div>
		<strong>Written at {{$post->created_at}}</strong>
		<hr>
		@if(!Auth::guest())
			@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
			{!!Form::open(['action'=>['PostController@destroy', $post->id],'method'=>'POST','class'=>'pull-right'])!!}
			{{form::hidden('_method','DELETE')}}
			{{form::submit('Delete',['class'=>'btn btn-danger'])}}
			{!!Form::close()!!}
			@endif
		@endif
`	</div>
	<div class="col-lg-3">
		<h2>Recent post</h2>
		@foreach($postlist as $postlist)
		<ul>
		<li><a class="post-title" href="/posts/{{$postlist->id}}">{{$postlist->title}}</a></li>
		</ul>
		@endforeach
	</div>
</div>
@endsection('content')