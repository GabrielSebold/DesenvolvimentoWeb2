<?php
$urlGet = 'destino.php?nome=Leonardo&telefone=47999999999&email=Leonardo@gmail.com&mensagem=Teste+por+GET';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="container">
    <h1>Formulario simples</h1>

    <form action="destino.php" method="post">
        Nome:<br>
        <input type="text" name="nome"><br><br>

        Telefone:<br>
        <input type="number" name="telefone"><br><br>

        E-mail:<br>
        <input type="text" name="email"><br><br>

        Mensagem:<br>
        <textarea name="mensagem" rows="4" cols="40"></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

    <p>Link de teste GET:</p>
    <a href="<?= $urlGet ?>"><?= $urlGet ?></a>
    </main>
</body>
</html>
