@extends('layouts.app')

@section('title', 'Horas de Sono')
@section('page_title', 'Exercicio 5 - Horas de Sono')

@section('content')
    <p>Informe idade e media de horas dormidas para avaliar a qualidade do sono.</p>

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('sono.resultado') }}">
        @csrf

        <label for="idade">Idade</label>
        <input id="idade" type="number" name="idade" min="1" max="120" value="{{ old('idade') }}" required>

        <label for="horas_sono">Numero medio de horas dormidas</label>
        <input id="horas_sono" type="number" name="horas_sono" min="1" max="24" step="0.5" value="{{ old('horas_sono') }}" required>

        <button type="submit">Avaliar Sono</button>
    </form>
@endsection

