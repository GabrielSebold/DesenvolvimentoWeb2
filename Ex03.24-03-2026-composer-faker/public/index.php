<?php

declare(strict_types=1);

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (!file_exists($autoloadPath)) {
    http_response_code(500);
    echo '<h2>Dependencias nao instaladas.</h2>';
    echo '<p>Execute <code>composer install</code> na pasta do projeto e recarregue.</p>';
    exit;
}

require $autoloadPath;

$faker = Faker\Factory::create('pt_BR');
$rows = [];

for ($i = 1; $i <= 10; $i++) {
    $rows[] = [
        'id' => $i,
        'nome' => $faker->name(),
        'email' => $faker->safeEmail(),
        'cidade' => $faker->city(),
        'telefone' => $faker->phoneNumber(),
    ];
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex03 - Faker com Composer</title>
    <style>
        body {
            margin: 20px;
            font-family: "Segoe UI", Arial, sans-serif;
            color: #222;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
        }
        h1 {
            margin: 0 0 10px;
            font-size: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<main class="container">
    <h1>Lista de Dados Fake com Faker</h1>
    <p>Aplicacao simples em PHP usando o pacote <code>fakerphp/faker</code> instalado via Composer.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $person): ?>
            <tr>
                <td><?= htmlspecialchars((string) $person['id']) ?></td>
                <td><?= htmlspecialchars($person['nome']) ?></td>
                <td><?= htmlspecialchars($person['email']) ?></td>
                <td><?= htmlspecialchars($person['cidade']) ?></td>
                <td><?= htmlspecialchars($person['telefone']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>
