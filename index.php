<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #292929;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: gray;
            text-decoration: none;
        }

        h1 {
            color: black;
            margin-bottom: 20px; /* Espaço abaixo do título */
        }

        .logo {
            max-width: 100%; /* Ajusta a largura da imagem para não ultrapassar o contêiner */
            height: auto; /* Mantém a proporção */
            margin-bottom: 20px; /* Espaço abaixo da imagem */
            width: 300px; /* Defina uma largura fixa, se necessário */
        }

        .divLogin {
            background-color: white; /* Cor de fundo do formulário */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
            padding: 20px; /* Espaçamento interno */
            width: 300px; /* Largura do formulário */
        }

        label {
            font-weight: bold; /* Negrito para os rótulos */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%; /* Ocupa toda a largura do formulário */
            padding: 10px; /* Espaçamento interno */
            margin: 10px 0; /* Espaçamento acima e abaixo */
            border: 1px solid #ccc; /* Borda leve */
            border-radius: 5px; /* Bordas arredondadas */
            box-sizing: border-box; /* Inclui padding e border na largura total */
        }

        button {
            background-color: #4CAF50; /* Cor de fundo do botão */
            color: white; /* Cor do texto do botão */
            padding: 10px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Mão ao passar o mouse */
            width: 100%;    
        }

        button:hover {
            background-color: #45a049; /* Cor de fundo ao passar o mouse */
        }

        a {
            text-decoration: none; /* Remove sublinhado */
            color: #007BFF; /* Cor do link */
            display: block; /* Exibe como bloco */
            margin-top: 15px; /* Espaçamento acima do link */
            text-align: center; /* Centraliza o link */
        }

        a:hover {
            text-decoration: underline; /* Sublinha ao passar o mouse */
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="logo" src="assets/logo_if.png" alt="Logo">
        <h1 style="color: black">Study Space</h1>
        <div class="divLogin">
            <form action="bd/verificar_login.php" method="POST" class="formulario">
                <label for="login">Login:</label><br>
                <input type="text" name="matricula" required placeholder="Digite seu login." autocomplete="off"><br>

                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" required placeholder="Digite sua senha."autocomplete="off"><br><br>

                <button type="submit">Login</button><br>
                <a href="usuario/cadastro.php">Não tem uma conta? Cadastre-se!</a>                
            </form>
        </div>
    </div>
    <?php
    include '../projeto_snct/layout/footer.php';
    ?>
</body>

</html>
