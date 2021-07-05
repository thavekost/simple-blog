@extends('layouts.app')

@section('content')

  <div class="card my-4">
    <h5 class="card-header">Create a Post:</h5>
    <div class="card-body">
      <form method="POST" action="{{ url('/posts/save') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <textarea name="lead" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
          <textarea name="body" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
          <input name="image" type="file" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>

@endsection