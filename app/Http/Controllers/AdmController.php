<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adm;

class AdmController extends Controller
{
    public function login(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'cpf' => 'required|string',
            'senha' => 'required|string',
        ]);

        // Recupera os dados do formulário
        $cpf = $request->input('cpf');
        $senha = $request->input('senha');

        // Realiza a consulta no banco de dados
        $usuario = Adm::where('cpf', $cpf)->where('senha', $senha)->first();

        // Verifica se o usuário foi encontrado
        if ($usuario) {
            // Usuário autenticado com sucesso
            return redirect()->route('clientes.index');
        } else {
            // Usuário não encontrado
            return redirect()->back()->with('error', 'Credenciais inválidas. Tente novamente.');
        }
    }
}
