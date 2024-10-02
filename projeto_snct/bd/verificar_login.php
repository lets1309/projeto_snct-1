<?php
// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "projeto_snct");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber os dados do formulário
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

// Consulta ao banco de dados para verificar o login e senha
$sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
$result = $conn->query($sql);

// Verificar se encontrou o usuário
if ($result->num_rows > 0) {
    // Usuário encontrado, redirecionar para o sistema
    header("Location: ../menuPrincipal.php");
} else {
    // Usuário não encontrado, exibir mensagem de erro ou redirecionar
    echo "<script>alert('Login ou senha incorretos! Verifique os dados ou cadastre-se.'); window.location.href='../login.php';</script>";
}

$conn->close();
?>
