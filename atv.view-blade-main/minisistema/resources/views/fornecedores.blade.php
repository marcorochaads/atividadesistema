@extends('layouts.app')
@section('title', 'Fornecedores')

@section('content')
    <h1>Detalhes do Fornecedor</h1>
    <p>Nome: {{ $dados['nome'] }}</p>
    <p>Categoria: {{ $dados['categoria'] }}</p>

    @if($dados['status'] == 'ativo')
        <p style="color: green;">Status: Este fornecedor está <strong>Ativo</strong>.</p>
    @else
        <p style="color: red;">Status: Este fornecedor está <strong>Inativo</strong>.</p>
    @endif
@endsection