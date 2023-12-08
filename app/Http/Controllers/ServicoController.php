<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Equipe;
use App\Models\Carro;
use App\Models\Peca;

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
        $pecas = Peca::all();
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
            'servicoAtual' => $servicoAtual,
            'pecas' => $pecas
        ]);
    }

    public function store(Request $request){
        
        Servico::create([
            'entrada' => $request->input('entrada'),
            'defeito' => $request->input('defeito'),
            'conserto' => $request->input('conserto'),
            'total' => $request->input('total'),
            'aprovado' => $request->input('aprovado'),
            'pronto' => $request->input('pronto'),
            'entregue' => $request->input('entregue'),
            'equipe_id' => $request->input('equipe_id'),
            'carro_id' => $request->input('carro_id'),
            'peca_id' => $request->input('peca_id')
        ]);
        return redirect()->route('servicos.index')->with('success', 'Servico adicionado com sucesso!');
    }

    public function detalhes($id)
    {
        // Encontre o serviço com base no ID
        $servico = Servico::find($id);
        $equipes = Equipe::all();
        $pecas = Peca::all();

        // Verifique se o serviço foi encontrado
        if (!$servico) {
            // Se não encontrar, você pode redirecionar para uma página de erro ou fazer algo diferente
            return redirect()->route('servicos.index')->with('error', 'Serviço não encontrado.');
        }
        // Carregue a visão detalhes com os dados do serviço
        return view('detalhesServico', ['servico' => $servico, 'equipes' => $equipes, 'pecas' => $pecas]);
    }

    public function atualizar(Request $request, $id)
    {
        // Encontre o serviço com base no ID
        $servico = Servico::find($id);

        // Verifique se o serviço foi encontrado
        if (!$servico) {
            return redirect()->route('servicos.index')->with('error', 'Serviço não encontrado.');
        }

        // Atualize as informações do serviço com base nos dados do formulário
        $servico->update([
            'entrada' => $request->input('entrada'),
            'defeito' => $request->input('defeito'),
            'conserto' => $request->input('conserto'),
            'total' => $request->input('total'),
            'aprovado' => $request->input('aprovado'),
            'pronto' => $request->input('pronto'),
            'entregue' => $request->input('entregue'),
            'equipe_id' => $request->input('equipe_id'),
            'peca_id' => $request->input('peca_id')
        ]);

        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso.');
    }
    public function destroy($id)
    {
        $servico = Servico::find($id);
        $servico->delete();

        return redirect()->route('servicos.index')->with('success', 'Serviço excluído com sucesso!');
    }
}
