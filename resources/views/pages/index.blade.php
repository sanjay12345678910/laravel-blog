@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
<h1>{{$indextitle}}</h1>
<p>this is laravel application from the "laravel from scratch" series</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" role="button"href="/register">Register</a></p>
</div>
@endsection