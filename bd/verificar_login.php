<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "projeto_snct");

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    //pega os dados do form de login
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    //faz uma consulta simples para ver se o login(matricula) e a senha estão cadastrados no banco de dados
    $sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
    $result = $conn->query($sql);
    
    //se a consulta retornar algum resultado, o login é válido e o sistema redireciona para a página principal
    if ($result->num_rows > 0) {
        $_SESSION['login'] = $matricula;
        header("Location: ../menuPrincipal.php");
        exit;
    } else {
        //mensagem de erro utilizando js
        echo "<script>alert('Login ou senha incorretos! Verifique os dados ou cadastre-se.'); window.location.href='../login.php';</script>";
    }

    $conn->close();
//não sei porquê, mas no trechinho abaixo consta como se tivesse algo de errado...
?>