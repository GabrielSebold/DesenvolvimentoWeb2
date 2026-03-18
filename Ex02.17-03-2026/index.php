<?php
$numero1 = $_POST['numero1'] ?? '';
$numero2 = $_POST['numero2'] ?? '';
$resultado = null;
$erro = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!is_numeric($numero1) || !is_numeric($numero2)) {
        $erro = 'Digite apenas numeros.';
    } else {
        $resultado = (float) $numero1 + (float) $numero2;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02 - Soma Simples</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="app">
        <h1>Calculadora de Soma</h1>
        <p>Aplicacao simples em PHP.</p>

        <?php if ($erro): ?>
            <div class="flash erro">
                <?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <form class="form" method="post">
            <label for="numero1">Numero 1</label>
            <input id="numero1" name="numero1" type="text" value="<?= htmlspecialchars((string) $numero1) ?>" required>

            <label for="numero2">Numero 2</label>
            <input id="numero2" name="numero2" type="text" value="<?= htmlspecialchars((string) $numero2) ?>" required>

            <button type="submit">Somar</button>
        </form>

        <?php if ($resultado !== null): ?>
            <div class="resultado">
                Resultado: <strong><?= $resultado ?></strong>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
