@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <h2>Login</h2>
    <p>Área de acesso restrito. Por favor, insira suas credenciais.</p>
    
    <form>
        <p>Email: <input type="email" name="email"></p>
        <p>Senha: <input type="password" name="senha"></p>
        <button type="button">Entrar</button>
    </form>
@endsection