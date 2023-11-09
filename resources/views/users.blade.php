@extends('master')

@section('content')

<h2>Users</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col" colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><a href="{{ route('users.edit', ['user' => $user->id])}}">Edit</a></td>
        <td><a href="">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
