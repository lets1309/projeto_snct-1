<?php
include '../bd/session.php';
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
    $foto_perfil = $row['foto_perfil'];
} else {
    echo "Usuário não encontrado.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="../layout/style_global.css">
<?php include '../layout/head.php'; ?>

<body>
    <?php include '../layout/cabecalho.php'; ?>
    <div class="conteiner-config">
        <h2>Configurações do Usuário</h2>
        
        <!-- Exibindo a imagem de perfil -->
        <?php if (!empty($imagem)) : ?>
            <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" style="width: 150px; height: 150px; border-radius: 50%; margin-bottom: 20px;">
        <?php else : ?>
            <p>Imagem de perfil não disponível.</p>
        <?php endif; ?>
        
        <p>Matrícula: <?php echo $matricula; ?></p>
        <p>Nome Completo: <?php echo $nome_completo; ?></p>
        <p>CPF: <?php echo $CPF; ?></p>
        <p>Endereço: <?php echo $endereco; ?></p>
        <p>Bairro: <?php echo $bairro; ?></p>
        <p>Número: <?php echo $numero; ?></p>

        <a href="alteracao_dados_usuario.php"
            style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-align: center; border-radius: 5px; text-decoration: none;">Alterar
            dados</a>

        <a href="menuPrincipal.php"
            style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-align: center; border-radius: 5px; text-decoration: none;">Voltar
            ao início</a>
    </div>
    <?php include '../layout/footer.php'; ?>
</body>
</html>
