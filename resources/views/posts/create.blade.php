@extends('layout')

@section('content')
<h1>Publish a post</h1>
  <form method="POST" action="/posts">
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Post</label>
      <textarea class="form-group form-control" name="body"></textarea>
    </div>
    <div class="form-check">
    </div>
    <button type="submit" class="btn btn-primary">Publish</button>
  </form>
@endsection
