<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Carro;

class ClienteController extends Controller{
    public function viewCadastroClientes(){
        // Exibe o formulário para adicionar um novo cliente
        return view('cadastroClientes');
    }

    public function viewClientes(){
        // Função para SELECT * FROM clientes
        $clientes = Cliente::all();
        return view('clientes', ['clientes' => $clientes]);
    }

    public function store(Request $request){

        Cliente::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'endereco' => $request->input('endereco'),
        ]);
        return redirect()->route('clientes.index')->with('success', 'Cliente adicionado com sucesso!');
    }
}
