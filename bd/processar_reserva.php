<?php
    // Conexão com o banco de dados
    include 'config.php';
    
    $numero_sala = $_POST['selecionar_sala'];
    $matricula = $_POST['matricula'];
    $participantes = $_POST['numeroPessoas'];
    
    // Obter as datas do formulário
    $data_inicio = $_POST['data_inicio']; // Data de início enviada pelo formulário
    $data_termino = $_POST['data_termino']; // Data de término enviada pelo formulário

    // Corrigindo a consulta SQL
    $sql = "INSERT INTO reserva (numero_sala, matricula, data_inicio, data_termino) 
            VALUES ('$numero_sala', '$matricula', '$data_inicio', '$data_termino')";

    if (mysqli_query($conn, $sql)) {
        // Exibe um alert e recarrega a página após clicar em OK
        echo "<script>
                alert('Reserva efetuada com sucesso!');
                window.location.href = '../usuario/reservarSala.php'; // Substitua pelo URL da página que você quer recarregar
              </script>";
    } else {
        // Exibe um alert com o erro
        echo "<script>
                alert('Erro ao efetuar reserva: " . mysqli_error($conn) . "');
                window.location.href = 'url_da_pagina'; // Substitua pelo URL da página para recarregar em caso de erro
              </script>";
    }

    // Fechar a conexão
    mysqli_close($conn);
?>
