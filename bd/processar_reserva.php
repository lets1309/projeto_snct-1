<?php
    // Conexão com o banco de dados
    include 'conexao_adm.php';
    
    $numero_sala = $_POST['selecionar_sala'];
    $matricula = $_POST['matricula'];
    $participantes = $_POST['numeroPessoas'];
    $data_inicio = '2024-10-15'; // Use um valor dinâmico, como $_POST['data_inicio'], se necessário
    $data_termino = '2024-10-15'; // Mesmo para a data de término
    $status = 'ativo';

    $sql = "INSERT INTO reserva (numero_sala, matricula, data_inicio, data_termino, status) 
            VALUES ('$numero_sala','$matricula', '$data_inicio', '$data_termino', '$status')";

    if (mysqli_query($conexao, $sql)) {
        // Exibe um alert e recarrega a página após clicar em OK
        echo "<script>
                alert('Reserva efetuada com sucesso!');
                window.location.href = '../usuario/reservarSala.php'; // Substitua pelo URL da página que você quer recarregar
              </script>";
    } else {
        // Exibe um alert com o erro
        echo "<script>
                alert('Erro ao efetuar reserva: " . mysqli_error($conexao) . "');
                window.location.href = 'url_da_pagina'; // Substitua pelo URL da página para recarregar em caso de erro
              </script>";
    }

    // Fechar a conexão
    mysqli_close($conexao);
?>
