@extends('layouts.app')

@section('title', 'Calculo IMC')
@section('page_title', 'Exercicio 4 - Calculo IMC')

@section('content')
    <p>Preencha os dados para calcular o IMC.</p>

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('imc.resultado') }}">
        @csrf

        <label for="nome">Nome</label>
        <input id="nome" type="text" name="nome" value="{{ old('nome') }}" required>

        <label for="data_nascimento">Data de Nascimento</label>
        <input id="data_nascimento" type="date" name="data_nascimento" value="{{ old('data_nascimento') }}" required>

        <label for="peso">Peso (kg)</label>
        <input id="peso" type="number" name="peso" min="1" step="0.01" value="{{ old('peso') }}" required>

        <label for="altura">Altura (m)</label>
        <input id="altura" type="number" name="altura" min="0.5" step="0.01" value="{{ old('altura') }}" required>

        <button type="submit">Calcular</button>
    </form>
@endsection

