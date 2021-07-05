@extends('layouts.admin')

@section('content')

<h2>Users</h2>

<div class="table-responsive">
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>email</th>
      <th>created at</th>
      <th>updated at</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

@endsection
