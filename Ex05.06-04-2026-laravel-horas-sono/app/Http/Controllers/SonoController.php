<?php

namespace App\Http\Controllers;

use App\Models\Sono;
use Illuminate\Http\Request;

class SonoController extends Controller
{
    public function index()
    {
        return view('sono.form');
    }

    public function resultado(Request $request, Sono $sono)
    {
        $dados = $request->validate([
            'idade' => ['required', 'integer', 'min:1', 'max:120'],
            'horas_sono' => ['required', 'numeric', 'gt:0', 'lte:24'],
        ]);

        $resultado = $sono->avaliar((int) $dados['idade'], (float) $dados['horas_sono']);

        return view('sono.resultado', [
            'idade' => (int) $dados['idade'],
            'horas_sono' => (float) $dados['horas_sono'],
            'faixa_etaria' => $resultado['faixa_etaria'],
            'intervalo_ideal' => $resultado['intervalo_ideal'],
            'classificacao' => $resultado['classificacao'],
            'mensagem' => $resultado['mensagem'],
        ]);
    }
}

