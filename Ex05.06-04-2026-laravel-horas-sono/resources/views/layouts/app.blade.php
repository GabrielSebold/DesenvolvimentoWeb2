<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Exercicio Horas de Sono')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 24px auto;
            padding: 0 12px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            box-sizing: border-box;
        }
        button {
            margin-top: 14px;
            cursor: pointer;
        }
        .errors {
            color: #b00020;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    <h1>@yield('page_title')</h1>
    <div class="card">
        @yield('content')
    </div>
</body>
</html>

