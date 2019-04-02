@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary btn-sm">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image">
    <br><br>
    <div>
        {!!$post->body!!} <!--!! to parse the html coming from the body due to ck editor-->
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id== $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    @endif
    @endif
@endsection