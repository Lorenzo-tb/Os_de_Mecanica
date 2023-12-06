<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Cliente;

class CarroController extends Controller
{
    public function viewCadastroCarros(){
        $clientes = Cliente::all();
        return view('cadastroCarros', ['clientes' => $clientes]);
    }

    public function store(Request $request){
        Carro::create([
            'placa' => $request->input('placa'),
            'modelo' => $request->input('modelo'),
            'cor' => $request->input('cor'),
            'ano' => $request->input('ano'),
            'numeroChassi' => $request->input('numeroChassi'),
            'cliente_id' => $request->input('cliente_id')
        ]);
        return redirect()->route('clientes.index')->with('success', 'Carro adicionado com sucesso!');
    }
}
