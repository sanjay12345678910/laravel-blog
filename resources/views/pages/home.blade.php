@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-9">
		<div class="recent">
			<h3 class="btn btn-success">Recent</h3>
			<hr>
			@foreach($data as $data)
			<p><a href="/posts/{{$data->id}}" class="post-title">{{$data->title}}</a></p>
			<hr style="border:2px solid blue;">
			@endforeach
		</div>
		<div class="recent">
			<h3 class="btn btn-success">Science</h3>
			<hr>
			@foreach($science as $science)
			<p><a href="/posts/{{$data->id}}" class="post-title">{{$science->title}}</a></p>
			<hr style="border:2px solid blue;">
			@endforeach
		</div>
		<div class="recent">
			<h3 class="btn btn-success">Politics</h3>
			<hr>
			@foreach($politics as $politics)
			<p><a href="/posts/{{$data->id}}" class="post-title">{{$politics->title}}</a></p>
			<hr style="border:2px solid blue;">
			@endforeach
		</div>
`	</div>
	<div class="col-md-3">
		<h3 class="post-title">Recent Post</h3>
		<ul>
		@foreach($post as $post)
		<a class="post-title" href="/posts/{{$post->id}}"><li>{{$post->title}}</li></a>
		@endforeach
		</ul>
	</div>
</div>
@endsection
