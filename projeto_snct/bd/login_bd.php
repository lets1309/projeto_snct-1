<?php
    // Informações de conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";  // ou o nome do usuário que você configurou
    $senha = "";        // senha do MySQL (geralmente vazia por padrão no XAMPP)
    $banco = "projeto_snct"; // Substitua pelo nome do seu banco de dados

    // Conectando ao banco de dados
    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    // Verifica se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Obtém os dados enviados pelo formulário
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Consulta ao banco de dados para verificar o login e senha
    $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Se o login for bem-sucedido, redireciona para a página principal
        header("Location: menuPrincipal.php");
    } else {
        // Se o login falhar, exibe uma mensagem de erro
        echo "Login ou senha inválidos.";
    }

    $conn->close();
?>