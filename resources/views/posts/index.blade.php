@extends('layouts.app')
@section('content')
<div class="row">
<h1>Posts</h1>
@if(count($post)>0)
<div class='container-fluid'>
	<div class="col-md-8" style="padding:20px;">
		<div class="row">
			@foreach($post as $posts)
			<div class="col-md-4">
				<div>
				<a href="/posts/{{$posts->id}}"><img style="width:100%; height:auto;" src="storage/cover_image/{{$posts->cover_image}}"></a>
				</div>
				<div class="text-center">
					<a style="font-size:1.2em;" class="post-title">{{$posts->title}}</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@else
<p>No posts found</p>
@endif
<div class="col-md-4">
	<div class="col-md-12" style="border-bottom:1px solid red; background-color:green; color:white;">
	<h2>Recent Posts</h2>
	</div>
			@foreach($post as $posts)
				<ul><li ><h3><a href="posts/{{$posts->id}}" class="post-title">{{$posts->title}}</a></h3></li>
				</ul>
		@endforeach
</div>
</div>
</div>
@endsection('content')