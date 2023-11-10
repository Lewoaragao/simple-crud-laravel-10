@extends('master')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<h2>Create</h2>

<form action="{{ route('users.store') }}" method="post">
    @csrf

    <input type="text" class="form-control mt-2" name="name" placeholder="Seu nome" value="Leonardo">
    <input type="text" class="form-control mt-2" name="email" placeholder="Seu email" value="lewoaragao@gmail.com">
    <input type="password" class="form-control mt-2" name="password" placeholder="Sua senha" value="123">

    <button type="submit" class="btn btn-primary mt-2">Criar</button>
</form>

@endsection
