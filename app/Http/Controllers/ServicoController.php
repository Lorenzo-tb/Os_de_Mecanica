<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Equipe;
use App\Models\Carro;

class ServicoController extends Controller
{
    public function viewServicos(){
        $servicos = Servico::all();
        return view('servicos', ['servicos' => $servicos]);
    }

    public function viewCadastroServicos(){
        $servicos = Servico::all();
        $carros = Carro::all();
        $equipes = Equipe::all();
        $servicoAtual = 0;

        foreach($servicos as $servico){
            if($servico->id > $servicoAtual){
                $servicoAtual = $servico->id;
            }
        }

        $servicoAtual++;
        return view('novoServico', [
            'carros' => $carros, 
            'equipes' => $equipes, 
            'servicoAtual' => $servicoAtual
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'entrada' => 'required', // Adicione outras regras de validação conforme necessário
            'defeito' => 'required',
            'conserto' => 'required',
            'orcamento' => 'required',
            'total' => 'required',
            'pronto' => 'required',
            'entregue' => 'required',
            'equipe_id' => 'required',
            'carro_id' => 'required',
        ]);
        
        Servico::create([
            'entrada' => $request->input('entrada'),
            'defeito' => $request->input('defeito'),
            'conserto' => $request->input('conserto'),
            'orcamento' => $request->input('orcamento'),
            'total' => $request->input('total'),
            'aprovado' => $request->input('aprovado'),
            'pronto' => $request->input('pronto'),
            'entregue' => $request->input('entregue'),
            'equipe_id' => $request->input('equipe_id'),
            'carro_id' => $request->input('carro_id'),
        ]);
        return redirect()->route('servicos.index')->with('success', 'Servico adicionado com sucesso!');
    }
}
