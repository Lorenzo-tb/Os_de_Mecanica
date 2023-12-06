<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;

class PecaController extends Controller
{
    public function viewCadastroPecas(){
        // Exibe o formulário para adicionar um novo cliente
        return view('cadastroPecas');
    }

    public function viewPecas(){
        // Função para SELECT * FROM clientes
        $pecas = Peca::all();
        return view('pecas', ['pecas' => $pecas]);
    }

    public function store(Request $request){
        Peca::create([
            'nome' => $request->input('nome'),
            'quantidade' => $request->input('quantidade'),
            'preco' => $request->input('preco')
        ]);
        return redirect()->route('pecas.index')->with('success', 'Peca adicionada com sucesso!');
    }
}
