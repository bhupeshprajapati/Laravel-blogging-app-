@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
<form class="form-group" action="{{url('/posts')}}" method="POST">
    @csrf
    <label for="">Title :</label>
       <input class="form-control" type="text" name="title" placeholder="title"><br><br>
     <label for="">Body: </label>   
       <input  class="form-control" type="text" name="body" placeholder="body"><br><br> <!--id="article-ckeditor"-->
        <input type="submit" class="btn btn-success btn-block" >
    </form>
@endsection