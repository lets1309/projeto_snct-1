<?php
    session_start();
    if (!isset($_POST['matricula'])) {
        // Se o arquivo foi acessado diretamente, redireciona para a página de alteração.
        header("Location: ../alteracao_dados_usuario.php");
        exit; // Essa linha deve estar antes do include
    }

    include 'conexao.php';

    // Receber dados do formulário
    $matricula = $_POST['matricula'];
    $senha_atual = $_POST['senha_atual'];
    $novo_endereco = $_POST['endereco'];
    $novo_bairro = $_POST['bairro'];
    $novo_numero = $_POST['numero'];
    $nova_senha = $_POST['senha'];

    // Verificar se a senha atual está correta
    $sql = "SELECT senha FROM usuarios WHERE matricula = '$matricula'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if ($row['senha'] === $senha_atual) {
            // Atualizar dados do usuário
            $update_sql = "UPDATE usuarios SET endereco = '$novo_endereco', bairro = '$novo_bairro', numero = '$novo_numero'";

            // Atualizar a senha apenas se o usuário digitou uma nova
            if (!empty($nova_senha)) {
                $update_sql .= ", senha = '$nova_senha'";
            }

            $update_sql .= " WHERE matricula = '$matricula'";

            if ($conn->query($update_sql) === TRUE) {
                echo "<script>
                        alert('Dados atualizados com sucesso.');
                        window.location.href = '../usuario/configuracoes_do_usuario.php';
                    </script>";
            } else {
                echo "Erro ao atualizar os dados: " . $conn->error;
            }
        } else {
            echo "<script>
                    alert('Senha atual incorreta.');
                    window.history.back();
                </script>";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $conn->close();
?>
