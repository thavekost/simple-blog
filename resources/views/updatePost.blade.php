@extends('layouts.app')

@section('content')

  <div class="card my-4">
    <h5 class="card-header">Create a Post:</h5>
    <div class="card-body">
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Name</label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}" />
            </div>
            <div class="form-group">
                <label for="email">Lead</label>
                <input type="text" class="form-control" name="lead" value="{{ $post->lead }}" />
            </div>
            <div class="form-group">
                <label for="phone">body</label>
                <input type="text" class="form-control" name="body" value="{{ $post->body }}" />
            </div>
            <div class="form-group">
                <input name="image" type="file" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-block btn-danger">Update</button>
        </form>
    </div>
  </div>

@endsection
