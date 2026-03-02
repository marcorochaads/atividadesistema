<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;

// Rotas Principais
Route::get('/', [PrincipalController::class, 'index'])->name('principal');
Route::get('/sobrenos', [SobreNosController::class, 'index'])->name('sobrenos');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Grupo de Rotas com Prefixo /app
Route::prefix('app')->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('app.clientes');
    
    // Rota com parâmetros obrigatórios
    Route::get('/fornecedores/{nome}/{status}/{categoria}', [FornecedorController::class, 'index'])->name('app.fornecedores');
    
    // Rota com parâmetros opcionais
    Route::get('/produtos/{nome?}/{preco?}', [ProdutoController::class, 'index'])->name('app.produtos');
});