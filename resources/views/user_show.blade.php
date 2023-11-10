@extends('master')

@section('content')

<h2>Usuário - {{ $user->name }} </h2>

<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger mt-2">Deletar</button>
</form>

@endsection
