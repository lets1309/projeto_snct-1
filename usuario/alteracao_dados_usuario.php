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
    <title>Alteração de Dados do Usuário</title>
</head>

<body>
    <?php
    include '../layout/cabecalho.php';
    ?>
    <h1>Alteração de dados do usuário</h1>

    <form action="../bd/update.php" method="POST">
        <label for="senha_atual">Senha Atual:</label><br>
        <input type="password" name="senha_atual" required placeholder="Digite sua senha atual."><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" value="<?php echo $endereco; ?>" required><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" name="bairro" value="<?php echo $bairro; ?>" required><br>

        <label for="numero">Número:</label><br>
        <input type="text" name="numero" value="<?php echo $numero; ?>" required><br>

        <label for="senha">Nova Senha:</label><br>
        <input type="password" name="senha" placeholder="Digite sua nova senha."><br><br>

        <input type="hidden" name="matricula" value="<?php echo $login; ?>">
        <button type="submit">Enviar alterações</button>
    </form>

</body>

</html>