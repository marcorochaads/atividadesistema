@extends('layouts.app')
@section('title', 'Lista de Clientes')

@section('content')
    <h1>Clientes</h1>
    <p>Confira abaixo a lista de clientes cadastrados no sistema.</p>

    @if(empty($clientes))
        <p>Não há nenhum cliente cadastrado no momento.</p>
    @else
        <ul>
            @foreach($clientes as $cliente)
                <li>ID: {{ $cliente['id'] }} | Nome: {{ $cliente['nome'] }}</li>
            @endforeach
        </ul>
    @endif
@endsection