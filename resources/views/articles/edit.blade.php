@extends('layout')

@section('cssLink')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
<div class="container">
    <h3>Update Article</h3>
    <form method="post" action="/articles/{{ $article->id }}">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="excerpt">Excerpt:</label>
        <textarea name="excerpt" id="excerpt" class="form-control" placeholder="Enter excerpt">{{ $article->excerpt }}</textarea>
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id="body" class="form-control" placeholder="Enter body">{{ $article->body }}</textarea>
      </div>      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection