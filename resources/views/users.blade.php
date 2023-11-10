@extends('master')

@section('content')

<a href="{{ route('users.create') }}" class="btn btn-primary mt-4">Criar</a>

<h2 class="mt-2">Users</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col" colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', ['user' => $user->id])}}">Editar</a>
            </td>
            <td>
                <a href="{{ route('users.destroy', ['user' => $user->id])}}">Delete</a>
            </td>
            <td>
                <a href="{{ route('users.show', ['user' => $user->id])}}">Visualizar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
