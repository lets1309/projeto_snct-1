<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #666;

        }

        .formulario {
            width: 300px;
            height: 600px;
            background-color: whitesmoke;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }

        .btn-cadastro {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-cadastro:hover,
        .btn-cadastro:hover {
            background-color: green;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Área de Cadastro</h1>
        <div>
            <form action="bd/enviar_cadastro.php" method="POST" class="formulario">
                <label for="matricula">Matrícula:</label><br>
                <input type="text" name="matricula" required placeholder="Digite sua matrícula."><br>
                
                <label for="nome_completo">Nome completo:</label><br>
                <input type="text" name="nome_completo" required placeholder="Digite seu nome completo."><br>
                
                <label for="cpf">CPF:</label><br>
                <input type="text" name="CPF" required placeholder="Digite seu CPF."><br>
                
                <label for="endereco">Endereço:</label><br>
                <input type="text" name="endereco" required placeholder="Digite seu endereço."><br>
                
                <label for="bairro">Bairro:</label><br>
                <input type="text" name="bairro" required placeholder="Digite seu bairro."><br>
                
                <label for="numero">Número:</label><br>
                <input type="text" name="numero" required placeholder="Digite o número."><br><br>
                
                <label for="senha">Senha:</label><br>
                <input type="text" name="senha" required placeholder="Digite sua senha."><br><br>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>

</html>