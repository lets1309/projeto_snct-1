<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
            background-color: grey;
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
            <form action="../bd/enviar_cadastro_adm.php" method="POST" class="formulario">
                <label for="nome_adm">Nome completo:</label><br>
                <input type="text" name="nome_adm" required placeholder="Digite seu nome completo."><br>
                
                <label for="email_adm">Email:</label>
                <input type="email" name="email_adm"required placeholder="Digite seu email aqui."><br>

                <label for="CPF_adm">CPF:</label><br>
                <input type="text" name="CPF_adm" required placeholder="Digite seu CPF."><br>
                 
                <label for="senha_adm">Senha:</label><br>
                <input type="text" name="senha_adm" required placeholder="Digite sua senha aqui."><br><br>
                

                <button type="submit">Cadastrar</button>

                <a href="login_adm.php"><button type="button">Voltar ao Início</button></a>
            </form>
        </div>
    </div>
</body>

</html>