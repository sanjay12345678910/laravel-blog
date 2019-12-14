@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
{!! Form::open(['action'=>'PostController@store', 'method'=> 'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{{form::label('title','Title')}}
    	{{form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
    </div>
    <div class="form-group">
        {{form::label('category','Category')}}
        <select name="category" class="form-control">
            <option>science</option>
            <option>health</option>
            <option>politics</option>
            <option>crime</option>
        </select>
    </div>
    <div class="form-group">
    	{{form::label('body','Body')}}
    	{{form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
    </div>
    <div class="form-group">
    	{{form::file('cover_image')}}
    </div>
    {{form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection