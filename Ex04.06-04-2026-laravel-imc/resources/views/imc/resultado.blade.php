@extends('layouts.app')

@section('title', 'Resultado IMC')
@section('page_title', 'Resultado do IMC')

@section('content')
    <p>
        {{ $nome }}, voce tem {{ $idade }} anos, sua altura e {{ number_format($altura, 2, ',', '.') }} m,
        seu peso e {{ number_format($peso, 2, ',', '.') }} kg e seu IMC e {{ number_format($imc, 2, ',', '.') }}.
    </p>

    <p>
        Pelo calculo do IMC voce esta classificado como <strong>{{ $classificacao }}</strong>.
    </p>

    <p><a href="{{ route('imc.index') }}">Voltar</a></p>
@endsection

