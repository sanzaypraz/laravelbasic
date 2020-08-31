@extends('layout')

@section('cssLink')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')
<div class="container">
    <h3>New Article</h3>
    <form method="post" action="/articles">
        @csrf
      <div class="form-group">
        <label for="title">Title:</label>
        {{-- <input type="text" class="form-control {{ $errors->has('title') ? 'border-danger' : '' }}" id="title" placeholder="Enter title" name="title">
        @if ($errors->has('title'))
          <p class="text-danger">{{ $errors->first('title') }}</p>
        @endif --}}
        
        <input type="text" class="form-control @error('title') border-danger @enderror" id="title" placeholder="Enter title" name="title" value="{{ old('title')}}">
        @error('title')
          <p class="text-danger">{{ $errors->first('title') }}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="excerpt">Excerpt:</label>
        <textarea name="excerpt" id="excerpt" class="form-control @error('excerpt') border-danger @enderror" placeholder="Enter excerpt">{{ old('excerpt')}}</textarea>
        @error('excerpt')
        <p class="text-danger">{{ $errors->first('excerpt') }}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id="body" class="form-control @error('body') border-danger @enderror" placeholder="Enter body">{{ old('body')}}</textarea>
        @error('body')
        <p class="text-danger">{{ $errors->first('body') }}</p>
        @enderror
      </div>      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection