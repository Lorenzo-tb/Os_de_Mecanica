<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\PecaController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ServicoController;


Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AdmController::class, 'login'])->name('adm.login');

Route::get('/', function(){
    return view('menu');
})->name('menu.index');


Route::get('/cadastroClientes', [ClienteController::class, 'viewCadastroClientes']);
Route::post('/cadastroClientes', [ClienteController::class, 'store'])->name('clientes.insert');
Route::get('/clientes', [ClienteController::class, 'viewClientes'])->name('clientes.index');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');



Route::get('/funcionarios', [FuncionarioController::class, 'viewFuncionarios'])->name('funcionarios.index');
Route::get('/cadastroFuncionarios', [FuncionarioController::class, 'viewCadastroFuncionarios']);
Route::post('/cadastroFuncionarios', [FuncionarioController::class, 'store'])->name('funcionarios.insert');
Route::get('/funcionarios/{id}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update');


Route::get('/pecas', [PecaController::class, 'viewPecas'])->name('pecas.index');
Route::get('/cadastroPecas', [PecaController::class, 'viewCadastroPecas']);
Route::post('/cadastroPecas', [PecaController::class, 'store'])->name('pecas.insert');

Route::get('/equipes', [EquipeController::class, 'viewEquipes'])->name('equipes.index');
Route::get('/cadastroEquipes', [EquipeController::class, 'viewCadastroEquipes']);
Route::post('/cadastroEquipes', [EquipeController::class, 'store'])->name('equipes.insert');

Route::get('/cadastroCarros', [CarroController::class, 'viewCadastroCarros']);
Route::post('/cadastroCarros', [CarroController::class, 'store'])->name('carros.insert');

Route::get('/servicos', [ServicoController::class, 'viewServicos'])->name('servicos.index');
Route::get('/cadastroServicos', [ServicoController::class, 'viewCadastroServicos']);
Route::post('/cadastroServicos', [ServicoController::class, 'store'])->name('servicos.insert');
Route::get('/servicos/detalhes/{id}', [ServicoController::class, 'detalhes'])->name('detalhesServico');
Route::put('/servicos/{id}', [ServicoController::class, 'atualizar'])->name('atualizarServico');
Route::delete('/servicos/{id}', [ServicoController::class, 'destroy'])->name('servicos.destroy');