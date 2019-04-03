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
        <a style="float:left" href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
       
        <form style="float:right" action="{{url('/posts/destroy')}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <input type="hidden" name="id" value="{{$post->id}}">
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    
    @endif
    @endif
@endsection