<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Equipe;

class FuncionarioController extends Controller
{
    public function viewCadastroFuncionarios(){
        // Exibe o formulário para adicionar um novo cliente
        $equipes = Equipe::all();
        return view('cadastroFuncionarios', ['equipes' => $equipes]);
    }

    public function viewFuncionarios(){
        // Função para SELECT * FROM clientes
        $funcionarios = Funcionario::all();
        return view('funcionarios', ['funcionarios' => $funcionarios]);
    }

    public function store(Request $request){
        Funcionario::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'equipe_id' => $request->input('equipe_id')
        ]);
        return redirect()->route('funcionarios.index')->with('success', 'Funcionario adicionado com sucesso!');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        $equipes = Equipe::all();

        return view('editarFuncionario', ['funcionario' => $funcionario, 'equipes' => $equipes]);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);

        $funcionario->update([
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'equipe_id' => $request->input('equipe_id')
        ]);

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso!');
    }
}
