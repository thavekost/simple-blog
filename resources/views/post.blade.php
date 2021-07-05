@extends('layouts.app')

@section('content')

  <!-- Title -->
  <h1 class="mt-4">{{ $post->title }}</h1>

  <!-- Author -->
  <p class="lead">
    by
    <a href="#">{{ $post->author }}</a>
  </p>

  <hr>

  @foreach ($post->tags as $tag)

    <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>

  @endforeach

  <hr>

  <!-- Date/Time -->
  <p>Posted on {{ $post->created_at }}</p>

  <hr>

  <!-- Preview Image -->
  <img class="img-fluid rounded" src="{{ asset( 'images/' . $post->image) }}" alt="">
  <img class="img-fluid rounded" src="{{ asset('storage/'.$post->image) }}" alt="">

  <hr>

  <!-- Post Content -->
  <p class="lead">{{ $post->lead }}</p>

  <p class="body">{{ $post->body }}</p>

  <hr>

  <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
      <form method="POST" action="{{ url('/posts/'.$post->id.'/comments') }}">
        @csrf
        <div class="form-group">
          <textarea name="kommentar" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  @foreach ($post->comments->sortByDesc('created_at') as $comment)

    <!-- Single Comment -->
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">{{ $comment->author }}</h5>
        {{ $comment->text }}
      </div>
    </div>

  @endforeach


@endsection
