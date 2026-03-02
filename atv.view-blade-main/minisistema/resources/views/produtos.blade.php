@extends('layouts.app')
@section('title', 'Produtos')

@section('content')
    <h1>Painel de Produtos</h1>
    
    @if($nome)
        <p><strong>Produto:</strong> {{ ucfirst($nome) }}</p>
        @if($preco)
            <p><strong>Preço:</strong> R$ {{ number_format($preco, 2, ',', '.') }}</p>
        @endif
    @else
        <p>Nenhum produto específico selecionado. Por favor, navegue pelo catálogo.</p>
        <p><em>Dica: Acesse /app/produtos/notebook/3500 na URL para testar!</em></p>
    @endif
@endsection