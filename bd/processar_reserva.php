<?php
    // Conexão com o banco de dados
    include 'config.php';
    
    // Obter os dados do formulário
    $numero_sala = $_POST['selecionar_sala'];
    $matricula = $_POST['matricula'];
    $participantes = $_POST['numeroPessoas'];
    
    // Obter a data e o horário do formulário
    $data_reserva = $_POST['data_reserva']; // Data da reserva enviada pelo formulário
    $horario_inicio = $_POST['horario_inicio']; // Horário de início enviado pelo formulário

    // Corrigindo a consulta SQL com os novos campos
    $sql = "INSERT INTO reserva (numero_sala, matricula, data_reserva, horario_inicio, numero_pessoas) 
            VALUES ('$numero_sala', '$matricula', '$data_reserva', '$horario_inicio', '$participantes')";

    if (mysqli_query($conn, $sql)) {
        // Exibe um alert e redireciona após clicar em OK
        echo "<script>
                alert('Solicitação de reserva efetuada com suceso!!!');
                window.location.href = '../usuario/reservarSala.php'; // Substitua pelo URL da página que você quer recarregar
              </script>";
    } else {
        // Exibe um alert com o erro
        echo "<script>
                alert('Erro ao efetuar reserva: " . mysqli_error($conn) . "');
                window.location.href = '../usuario/reservarSala.php'; // Substitua pelo URL da página para recarregar em caso de erro
              </script>";
    }

    // Fechar a conexão
    mysqli_close($conn);
?>
