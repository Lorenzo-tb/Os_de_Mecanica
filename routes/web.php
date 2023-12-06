<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\PecaController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\CarroController;


Route::get('/', function () {
    return view('login');
});
Route::post('/', [AdmController::class, 'login'])->name('adm.login');


Route::get('/cadastroClientes', [ClienteController::class, 'viewCadastroClientes']);
Route::post('/cadastroClientes', [ClienteController::class, 'store'])->name('clientes.insert');
Route::get('/clientes', [ClienteController::class, 'viewClientes'])->name('clientes.index');

Route::get('/funcionarios', [FuncionarioController::class, 'viewFuncionarios'])->name('funcionarios.index');
Route::get('/cadastroFuncionarios', [FuncionarioController::class, 'viewCadastroFuncionarios']);
Route::post('/cadastroFuncionarios', [FuncionarioController::class, 'store'])->name('funcionarios.insert');

Route::get('/pecas', [PecaController::class, 'viewPecas'])->name('pecas.index');
Route::get('/cadastroPecas', [PecaController::class, 'viewCadastroPecas']);
Route::post('/cadastroPecas', [PecaController::class, 'store'])->name('pecas.insert');

Route::get('/equipes', [EquipeController::class, 'viewEquipes'])->name('equipes.index');
Route::get('/cadastroEquipes', [EquipeController::class, 'viewCadastroEquipes']);
Route::post('/cadastroEquipes', [EquipeController::class, 'store'])->name('equipes.insert');

Route::get('/cadastroCarros', [CarroController::class, 'viewCadastroCarros']);
Route::post('/cadastroCarros', [CarroController::class, 'store'])->name('carros.insert');
