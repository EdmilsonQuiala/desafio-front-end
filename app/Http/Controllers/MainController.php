<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaDeAula; // Importe o modelo SalaDeAula

class MainController extends Controller
{
    public function home()
    {

        $salas = SalaDeAula::all();
        return view('home', compact('salas'));
    }

    public function showForm()
    {
        return view('registar-salas');
    }

    public function registrarSalas(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'designacao' => 'required|string',
            'funcionais' => 'required|integer',
            'NaoFuncionais' => 'required|integer',
            'NumeroTotal' => 'required|integer',
        ]);

        // Criação de um novo objeto SalaDeAula com os dados do formulário
        $sala = new SalaDeAula();
        $sala->designacao = $request->designacao;
        $sala->funcionais = $request->funcionais;
        $sala->nao_funcionais = $request->NaoFuncionais;
        $sala->numero_total = $request->NumeroTotal;

        // Salvando no banco de dados
        $sala->save();

        // Redirecionamento após o registro
        return redirect()->route('home')->with('success', 'Sala registrada com sucesso!');
    }
    public function atualizarSalas(Request $request)
    {

        foreach ($request->salas as $salaId => $valores) {
            $sala = SalaDeAula::findOrFail($salaId);

            // Verifica e define os valores para cada campo
            $funcionais = isset($valores['funcionais']) ? $valores['funcionais'] : $sala->funcionais;
            $naoFuncionais = isset($valores['nao_funcionais']) ? $valores['nao_funcionais'] : $sala->nao_funcionais;
            $numeroTotal = isset($valores['numero_total']) ? $valores['numero_total'] : $sala->numero_total;

            // Atualiza os valores da sala
            $sala->update([
                'funcionais' => $funcionais,
                'nao_funcionais' => $naoFuncionais,
                'numero_total' => $numeroTotal
            ]);
        }

        return redirect()->route('home')->with('success', 'Salas atualizadas com sucesso!');
    }
}
