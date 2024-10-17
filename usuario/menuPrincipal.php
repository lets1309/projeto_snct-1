<?php  
//ele inicia a sessão
session_start();

//verifica se o user está logado
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include '../bd/conexao.php';

//pega a matrícula do usuário da sessão
$matricula = $_SESSION['login'];  //usando 'matricula' em vez de 'login'

//consulta a matricula na tabela usuarios para procurar os dados do usuário logado
$sql = "SELECT * FROM usuarios WHERE matricula = '$matricula'";
$result = $conn->query($sql);

//verificação para saber se ele está logado
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    //pega o 'nome_completo' do usuário logado e exibe na tela***(linha 56)***
    $nome_completo = $row['nome_completo'];
} else {
    echo "Erro: Dados do usuário não encontrados.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuário</title>
    <link rel="stylesheet" type="text/css" href="../layout/styles.css">
</head>

<body>
    <?php
    include '../layout/cabecalho.php';
    ?>
    <h1>Bem-vindo, <?php echo $nome_completo; ?>!</h1>
    <h2>Evento da Semana Nacional de Ciência e Tecnologia</h2>

</body>

</html>