<?php
session_start();
include('../bd/config.php');

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome_adm'];
    $email = $_POST['email_adm'];
    $senha = $_POST['senha_adm'];

    // Verifica se a conexão foi estabelecida corretamente
    if ($conn) {
        $query = "UPDATE adm SET nome_adm='$nome', email_adm='$email', senha_adm='$senha' WHERE email_adm='{$_SESSION['email_adm']}'";
        
        if (mysqli_query($conn, $query)) {
            // Atualiza o email na sessão caso ele tenha sido alterado
            $_SESSION['email_adm'] = $email;

            // Define a mensagem de sucesso
            $mensagem = "Dados alterados com sucesso!";
        } else {
            // Define a mensagem de erro caso a consulta falhe
            $mensagem = "Erro ao atualizar os dados: " . mysqli_error($conn);
        }
    } else {
        $mensagem = "Erro de conexão com o banco de dados.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
</head>
<body>
<?php
include '../layout/cabecalho_adm.php';
?>
<h3>alterar dados ADM<h3>
<?php if (!empty($mensagem)): ?>
    <h2><?php echo $mensagem; ?></h2>
<?php endif; ?>

<form method="post" action="">
    Nome: <input type="text" name="nome_adm" required><br>
    Email: <input type="email" name="email_adm" required><br>
    Senha: <input type="password" name="senha_adm" required><br>
    <button type="submit">Salvar</button>
</form>

<!-- Botão para voltar ao início -->
<p>
    <a href="dashboard.php"><button type="button">Voltar ao Início</button></a>
</p>

</body>
</html>
