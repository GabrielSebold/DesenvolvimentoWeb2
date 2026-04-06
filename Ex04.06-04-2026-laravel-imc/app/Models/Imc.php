<?php

namespace App\Models;

class Imc
{
    public function calcular(float $peso, float $altura): array
    {
        $imc = $peso / ($altura * $altura);

        return [
            'imc' => round($imc, 2),
            'classificacao' => $this->classificar($imc),
        ];
    }

    private function classificar(float $imc): string
    {
        return match (true) {
            $imc < 18.5 => 'Abaixo do peso',
            $imc < 25 => 'Peso normal',
            $imc < 30 => 'Acima do peso (sobrepeso)',
            $imc < 35 => 'Obesidade I',
            $imc < 40 => 'Obesidade II',
            default => 'Obesidade III',
        };
    }
}

