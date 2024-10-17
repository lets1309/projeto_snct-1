<?php
    // Definir as variáveis de conexão com o banco de dados
    $servidor = "localhost"; // Ou o IP do seu servidor
    $usuario = "root"; // Usuário do banco de dados
    $senha = ""; // Senha do banco de dados
    $banco = "projeto_snct"; // Substitua pelo nome correto do seu banco

    // Criar a conexão com o banco de dados
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    // Verificar se houve erro na conexão
    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
?>