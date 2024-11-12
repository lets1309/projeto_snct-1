<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Cadastro</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .formulario {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            color: #555;
            text-align: left;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .submit-button {
            background-color: #28a745;
            color: white;
        }
        .submit-button:hover {
            background-color: #218838;
        }
        .back-button {
            background-color: #007bff;
            color: white;
            margin-top: 10px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Área de Cadastro</h1>
        <form action="../bd/enviar_cadastro_adm.php" method="POST" class="formulario" enctype="multipart/form-data">

            <label for="imagem">Foto de Perfil:</label>
            <input type="file" name="foto_perfil_adm" id="foto_perfil_adm" accept="../uploads/admin*" required>

            <label for="nome_adm">Nome completo:</label>
            <input type="text" name="nome_adm" required placeholder="Digite seu nome completo.">
            <label for="email_adm">Email:</label>
            <input type="email" name="email_adm" required placeholder="Digite seu email aqui.">
            <label for="CPF_adm">CPF:</label>
            <input type="text" name="CPF_adm" required placeholder="Digite seu CPF.">
            <label for="senha_adm">Senha:</label>
            <input type="password" name="senha_adm" required placeholder="Digite sua senha aqui.">
            <button type="submit" class="submit-button">Cadastrar</button>
            <a href="../adm/index.php" class="back-button">Voltar ao Início</a>
        </form>
    </div>
</body>
</html>
