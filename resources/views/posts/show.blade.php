@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary btn-sm">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!} <!--!! to parse the html coming from the body due to ck editor-->
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
@endsection