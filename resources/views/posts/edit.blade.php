@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
<form class="form-group" action="{{url('/posts/update/',$post->id)}}" method="POST">
    @csrf
    <label for="">Title :</label>
       <input class="form-control" type="text" name="title" value="{{$post->title}}" placeholder="title"><br><br>
     <label for="">Body: </label>   
       <input  class="form-control" type="text" name="body" value="{{$post->body}}" placeholder="body"><br><br> <!--id="article-ckeditor"-->
       <input type="file" name="cover_image"><br><br>
       <input type="submit" class="btn btn-success btn-block" >
   
    </form>
@endsection