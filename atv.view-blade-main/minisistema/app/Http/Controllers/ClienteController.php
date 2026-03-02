<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
    // Array com no mínimo 4 registros
    $clientes = [
        ['id' => 1, 'nome' => 'Ana Oliveira'],
        ['id' => 2, 'nome' => 'Carlos Santos'],
        ['id' => 3, 'nome' => 'Fernanda Lima'],
        ['id' => 4, 'nome' => 'João Costa']
    ];
    // Para testar o cenário vazio, usando: $clientes = [];
    
    return view('clientes', compact('clientes'));
}
}
