<?php

namespace App\Models;

class Sono
{
    public function avaliar(int $idade, float $horasSono): array
    {
        $regra = $this->regraPorIdade($idade);

        if ($horasSono < $regra['min']) {
            $classificacao = 'Abaixo do ideal';
            $mensagem = 'Durma mais horas para se aproximar da recomendacao da sua idade.';
        } elseif ($horasSono > $regra['max']) {
            $classificacao = 'Acima do ideal';
            $mensagem = 'Quantidade acima da faixa recomendada para sua idade.';
        } else {
            $classificacao = 'Sono adequado';
            $mensagem = 'Quantidade de sono dentro da faixa recomendada para sua idade.';
        }

        return [
            'faixa_etaria' => $regra['faixa'],
            'intervalo_ideal' => $regra['min'] . 'h a ' . $regra['max'] . 'h',
            'classificacao' => $classificacao,
            'mensagem' => $mensagem,
        ];
    }

    private function regraPorIdade(int $idade): array
    {
        return match (true) {
            $idade <= 13 => ['faixa' => 'Crianca (6-13 anos)', 'min' => 9, 'max' => 11],
            $idade <= 17 => ['faixa' => 'Adolescente (14-17 anos)', 'min' => 8, 'max' => 10],
            $idade <= 64 => ['faixa' => 'Adulto (18-64 anos)', 'min' => 7, 'max' => 9],
            default => ['faixa' => 'Idoso (65+ anos)', 'min' => 7, 'max' => 8],
        };
    }
}

