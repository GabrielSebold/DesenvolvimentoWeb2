<?php
$metodo = $_SERVER['REQUEST_METHOD'] ?? 'DESCONHECIDO';
$dados = $_REQUEST;

if (function_exists('apache_request_headers')) {
    $cabecalhos = apache_request_headers();
} else {
    $cabecalhos = [];
}
?>
<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <meta charset="UTF-8">
    <title>Destino</title>
</head>
<body>
    <h1>Destino do formulario</h1>

    <h2>Metodo HTTP</h2>
    <pre><?php print_r($metodo); ?></pre>

    <h2>Dados recebidos ($_REQUEST)</h2>
    <pre><?php print_r($dados); ?></pre>

    <h2>Cabecalhos (apache_request_headers)</h2>
    <pre><?php print_r($cabecalhos); ?></pre>

    <h2>Servidor ($_SERVER)</h2>
    <pre><?php print_r($_SERVER); ?></pre>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>
