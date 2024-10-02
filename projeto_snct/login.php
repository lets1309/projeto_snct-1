<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Colocar esse style dentro do css e add o link de href aqui-->
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
            height: 300px;
            background-color: whitesmoke;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }

        body {
            background-color: #666
        }

        .testeButton {
            background-color: blue;
            color: whitesmoke;
            width: 75px;
            text: center;
            color: white;
            text-decoration: none;
            padding: 14px 14px;
            display: block;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .btn-cadastro {
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="logo-ifpi-transp.png" alt="">
        <h1 style="color: white">Study Space</h1>
        <div class="divLogin">
            <form action="bd/verificar_login.php" method="POST" class="formulario">
                <label for="login">Login:</label><br>
                <input type="text" name="matricula" required placeholder="Digite seu login."><br>

                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" required placeholder="Digite sua senha."><br><br>

                <button type="submit">Login</button><br>
                <a href="cadastro.php">Não tem uma conta? Cadastre-se!</a>
            </form>

        </div>
    </div>
</body>

</html>