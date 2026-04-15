<h1>Detalhes do Contato</h1>

<ul>
    <li><strong>ID:</strong> {{ $contato->id }}</li>
    <li><strong>Nome:</strong> {{ $contato->nome }}</li>
    <li><strong>Email:</strong> {{ $contato->email }}</li>
    <li><strong>Telefone:</strong> {{ $contato->telefone ?? '-' }}</li>
    <li><strong>Data de Nascimento:</strong> {{ $contato->data_nascimento ?? '-' }}</li>
    <li><strong>Endereco:</strong> {{ $contato->endereco ?? '-' }}</li>
    <li><strong>Observacoes:</strong> {{ $contato->observacoes ?? '-' }}</li>
    <li><strong>Criado em:</strong> {{ $contato->created_at ?? '-' }}</li>
    <li><strong>Atualizado em:</strong> {{ $contato->updated_at ?? '-' }}</li>
</ul>

<a href="{{ route('contatos.index') }}">Voltar para lista</a> |
<a href="{{ route('contatos.edit', $contato->id) }}">Editar contato</a>
