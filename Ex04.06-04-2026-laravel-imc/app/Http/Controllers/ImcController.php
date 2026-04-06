<?php

namespace App\Http\Controllers;

use App\Models\Imc;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ImcController extends Controller
{
    public function index()
    {
        return view('imc.form');
    }

    public function resultado(Request $request, Imc $imc)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:100'],
            'data_nascimento' => ['required', 'date', 'before_or_equal:today'],
            'peso' => ['required', 'numeric', 'gt:0'],
            'altura' => ['required', 'numeric', 'gt:0'],
        ]);

        $idade = Carbon::parse($dados['data_nascimento'])->age;
        $resultado = $imc->calcular((float) $dados['peso'], (float) $dados['altura']);

        return view('imc.resultado', [
            'nome' => $dados['nome'],
            'idade' => $idade,
            'peso' => (float) $dados['peso'],
            'altura' => (float) $dados['altura'],
            'imc' => $resultado['imc'],
            'classificacao' => $resultado['classificacao'],
        ]);
    }
}

