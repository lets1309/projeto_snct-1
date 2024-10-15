<?php

    include 'conexao.php';

    // Receber os dados do formulário
    $matricula = $_POST['matricula'];
    $nome_completo = $_POST['nome_completo'];
    $CPF = $_POST['CPF'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];

    // Verificar se a matrícula já existe no banco de dados
    $sql_check = "SELECT * FROM usuarios WHERE matricula = '$matricula'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        // Se a matrícula já existir, exibe um alert em JavaScript
        echo "<script>
                alert('Erro: A matrícula $matricula já está cadastrada.');
                window.location.href = '../usuario/cadastro.php';
            </script>";
    } else {
        // Inserir no banco de dados se a matrícula não existir
        $sql = "INSERT INTO usuarios (matricula, nome_completo, CPF, endereco, bairro, numero, senha) 
                VALUES ('$matricula', '$nome_completo', '$CPF', '$endereco', '$bairro', '$numero', '$senha')";

        if ($conn->query($sql) === TRUE) {
            // Redirecionar para a página de login
            header("Location: ../index.php");
        } else {
            // Exibir erro se a inserção falhar
            echo "Erro ao cadastrar o usuário: " . $conn->error;
        }
    }

    $conn->close();
?>
