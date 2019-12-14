@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-9">

		<h2 class="size btn btn-success">विज्ञान </h2>
		<div class="row">
		@foreach($category as $category)
		<div class="col-lg-8">
		<p style="font-size:30px;" class="text-center"><a href="/posts/{{$category->id}}" class="post-title">{{$category->title}}</a></p>
		</div>
		<div class="col-lg-4">
			<a href="/posts/{{$category->id}}"><img style="width:100%; margin-bottom:10px;"src="storage/cover_image/{{$category->cover_image}}"></a>
		</div>
		<br>
		@endforeach
		</div>

	</div>
	<div class="col-lg-3">
		<h2 class="btn btn-success">Recent post</h2>
		@foreach($data as $data)
		<ul>
		<li><a href="/posts" class="post-title">{{$data->title}}</a></li>
		</ul>
		@endforeach
	</div>
</div>
@endsection