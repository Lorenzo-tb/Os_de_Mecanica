<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Carro;

class ClienteController extends Controller{
    public function viewCadastroClientes(){
        return view('cadastroClientes');
    }

    public function viewClientes(){

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
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('editarCliente', ['cliente' => $cliente]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->update([
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'endereco' => $request->input('endereco'),
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

}
