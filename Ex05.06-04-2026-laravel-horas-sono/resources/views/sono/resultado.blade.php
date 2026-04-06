@extends('layouts.app')

@section('title', 'Resultado Sono')
@section('page_title', 'Resultado da Avaliacao de Sono')

@section('content')
    <p>Idade informada: {{ $idade }} anos</p>
    <p>Horas de sono informadas: {{ number_format($horas_sono, 1, ',', '.') }}h</p>
    <p>Faixa etaria considerada: {{ $faixa_etaria }}</p>
    <p>Faixa ideal para a idade: {{ $intervalo_ideal }}</p>
    <p>Classificacao: <strong>{{ $classificacao }}</strong></p>
    <p>{{ $mensagem }}</p>

    <p><a href="{{ route('sono.index') }}">Voltar</a></p>
@endsection

