<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    public function viewCadastroEquipes(){
        // Exibe o formulário para adicionar um novo cliente
        return view('cadastroEquipes');
    }

    public function viewEquipes(){
        // Função para SELECT * FROM clientes
        $equipes = Equipe::all();
        return view('equipes', ['equipes' => $equipes]);
    }

    public function store(Request $request){
        Equipe::create([
            'nome' => $request->input('nome')
        ]);
        return redirect()->route('equipes.index')->with('success', 'Funcionario adicionado com sucesso!');
    }
}
