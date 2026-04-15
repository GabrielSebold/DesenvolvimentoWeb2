<header>
    <h1>Lista de Contatos</h1>
</header>

<div>
    @foreach ($contatos as $contato)
        <p>
            {{ $contato->id }} - {{ $contato->nome }} - {{ $contato->email }}
            <a href="{{ route('contatos.show', $contato->id) }}">Ver detalhes</a>
        </p>
    @endforeach
</div>
