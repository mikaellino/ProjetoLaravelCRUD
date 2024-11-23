<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Página de Tarefas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 1.2em;
            color: #555;
        }
        .button {
            background-color: #4CAF50;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        <p>Olá, estamos felizes em te receber! Este é o seu espaço para organizar e gerenciar suas tarefas de forma prática e eficiente.</p>
        <p>Logo, você poderá adicionar, editar e acompanhar todas as suas atividades diárias. Vamos começar a se organizar?</p>
        <a href="{{route('tarefas.index')}}" class="button">Começar Agora</a>
    </div>
</body>
</html>
