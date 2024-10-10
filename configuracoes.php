<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "projeto_snct");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$login = $_SESSION['login'];
$sql = "SELECT * FROM usuarios WHERE matricula = '$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome_completo = $row['nome_completo'];
    $CPF = $row['CPF'];
    $endereco = $row['endereco'];
    $bairro = $row['bairro'];
    $numero = $row['numero'];
} else {
    echo "Usuário não encontrado.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
</head>

<body>
    <?php
    include 'requireORinclude\cabecalho.php';
    ?>
    <h2>Configurações do Usuário</h2>
    <p>Nome Completo: <?php echo $nome_completo; ?></p>
    <p>CPF: <?php echo $CPF; ?></p>
    <p>Endereço: <?php echo $endereco; ?></p>
    <p>Bairro: <?php echo $bairro; ?></p>
    <p>Número: <?php echo $numero; ?></p>
    <button >Voltar ao inicio</button>
</body>

</html>