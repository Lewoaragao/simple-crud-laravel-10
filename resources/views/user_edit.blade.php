@extends('master')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<h2>Edit</h2>

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" class="form-control mt-2" name="name" value="{{ $user->name }}">
    <input type="text" class="form-control mt-2" name="email" value="{{ $user->email }}">
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>

@endsection
