<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Cor de fundo suave */
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh; /* Ocupa a altura total da janela */
            background-color: #666; /* Cor de fundo do contêiner */
        }

        h1 {
            color: white; /* Cor do texto do título */
            margin-bottom: 20px; /* Espaço abaixo do título */
        }

        .formulario {
            width: 300px; /* Largura do formulário */
            background-color: whitesmoke; /* Cor de fundo do formulário */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
            padding: 20px; /* Espaçamento interno */
            display: flex;
            flex-direction: column; /* Organiza os elementos em coluna */
        }

        label {
            font-weight: bold; /* Negrito para os rótulos */
            margin: 10px 0 5px; /* Margens para os rótulos */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%; /* Ocupa toda a largura do formulário */
            padding: 10px; /* Espaçamento interno */
            margin-bottom: 15px; /* Espaço abaixo dos campos */
            border: 1px solid #ccc; /* Borda leve */
            border-radius: 5px; /* Bordas arredondadas */
            box-sizing: border-box; /* Inclui padding e border na largura total */
        }

        button {
            background-color: blue; /* Cor de fundo do botão */
            color: white; /* Cor do texto do botão */
            padding: 10px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Mão ao passar o mouse */
            width: 100%; /* Ocupa toda a largura */
            margin-top: 10px; /* Espaçamento acima do botão */
        }

        button:hover {
            background-color: green; /* Cor de fundo ao passar o mouse */
        }

        .back-button {
            background-color: greenyellow; /* Fundo transparente */
            color: white; /* Cor do texto */
            border-color: blue;
            border-radius: 20px;
        }

        .back-button:hover {
            color: white; /* Cor ao passar o mouse */
        }

        a {
            text-decoration: none; /* Remove sublinhado */
            color: #007BFF; /* Cor do link */
            text-align: center; /* Centraliza o link */
            margin-top: 15px; /* Espaçamento acima do link */
        }

        a:hover {
            text-decoration: underline; /* Sublinha ao passar o mouse */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Área de Cadastro</h1>
        <form action="../bd/enviar_cadastro.php" method="POST" class="formulario">
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required placeholder="Digite sua matrícula.">

            <label for="nome_completo">Nome completo:</label>
            <input type="text" id="nome_completo" name="nome_completo" required placeholder="Digite seu nome completo.">

            <label for="cpf">CPF:</label>
            <input type="text" id="CPF" name="CPF" placeholder="Digite seu CPF.">

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço.">

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro.">

            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero"  placeholder="Digite o número.">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha.">

            <button type="submit">Cadastrar</button>
        </form>
        <button class="back-button" onclick="window.location.href='../index.php';">Voltar ao Login</button>

    </div>
</body>

</html>
