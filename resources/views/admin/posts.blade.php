@extends('layouts.admin')

@section('content')

    <h2>Posts</h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Author</th>
                <th>created at</th>
                <th>updated at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td class="text-center">
                        <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
