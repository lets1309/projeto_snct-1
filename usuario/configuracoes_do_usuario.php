<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    include '../bd/conexao.php';

    $login = $_SESSION['login'];
    $sql = "SELECT * FROM usuarios WHERE matricula = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $matricula = $row['matricula'];
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
    <link rel="stylesheet" type="text/css" href="../layout/styles.css">
</head>

<body>
    <?php
    include '../layout/cabecalho.php';
    ?>
    <h2>Configurações do Usuário</h2>
    <p>Matrícula: <?php echo $matricula; ?></p>
    <p>Nome Completo: <?php echo $nome_completo; ?></p>
    <p>CPF: <?php echo $CPF; ?></p>
    <p>Endereço: <?php echo $endereco; ?></p>
    <p>Bairro: <?php echo $bairro; ?></p>
    <p>Número: <?php echo $numero; ?></p>

    <!-- Botão para redirecionar para a página de alteração -->
    <a href="alteracao_dados_usuario.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-align: center; border-radius: 5px; text-decoration: none;">Alterar dados</a>

    <a href="menuPrincipal.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-align: center; border-radius: 5px; text-decoration: none;">Voltar ao início</a>
</body>

</html>
