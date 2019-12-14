@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-9">

		<h2 class="size btn btn-success">राजनीति  </h2>
		<div class="row">
		@foreach($category as $category)
		<div class="col-lg-8">
		<p style="font-size:30px;"><a  class="text-center post-title" href="/posts/{{$category->id}}">{{$category->title}}</a></p>
		</div>
		<div class="col-lg-4">
			<a href="/posts/{{$category->id}}"><img style="width:100%; margin-bottom:10px;"src="storage/cover_image/{{$category->cover_image}}"></a>
		</div>
		@endforeach
		</div>

	</div>
	<div class="col-lg-3">
		<h2 class="btn btn-success">Recent post</h2>
		@foreach($data as $data)
		<ul>
		<li><a class="post-title" href="/posts/{{$data->id}}">{{$data->title}}</a></li>
		</ul>
		@endforeach
		<a href="#">See more<<</a>
	</div>
</div>
@endsection