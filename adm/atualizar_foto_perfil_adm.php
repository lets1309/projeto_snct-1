<?php
session_start();
include('../bd/config.php');

$mensagem = '';  // Variável para armazenar mensagens de erro ou sucesso

// Verifica se o arquivo foi enviado corretamente
if (isset($_FILES['foto_perfil_adm']) && $_FILES['foto_perfil_adm']['error'] === UPLOAD_ERR_OK) {
    $temp_name = $_FILES['foto_perfil_adm']['tmp_name'];
    $file_name = uniqid() . '_' . basename($_FILES['foto_perfil_adm']['name']);
    
    // Verificação do tipo de arquivo (apenas imagens)
    $extensao = pathinfo($file_name, PATHINFO_EXTENSION);
    $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array(strtolower($extensao), $extensoes_permitidas)) {
        $mensagem = "Apenas imagens (JPG, JPEG, PNG ou GIF) são permitidas!";
    } else {
        // Caminho para a pasta de uploads do administrador
        $upload_dir = '../uploads/admin/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);  // Cria o diretório se não existir
        }

        // Caminho final para salvar o arquivo
        $file_path = $upload_dir . $file_name;

        // Tenta mover o arquivo para a pasta de uploads
        if (move_uploaded_file($temp_name, $file_path)) {
            // Atualiza o caminho da imagem no banco de dados
            $sql = "UPDATE adm SET foto_perfil_adm = ? WHERE email_adm = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $file_path, $_SESSION['email_adm']);
            
            if ($stmt->execute()) {
                // Redireciona com sucesso
                header("Location: configuracao_adm.php?foto_atualizada=1");
                exit();
            } else {
                $mensagem = "Erro ao atualizar o banco de dados!";
            }
        } else {
            $mensagem = "Erro ao mover o arquivo. Verifique as permissões da pasta.";
        }
    }
} else {
    if ($_FILES['foto_perfil_adm']['error'] != UPLOAD_ERR_OK) {
        $mensagem = "Erro no envio do arquivo: " . $_FILES['foto_perfil_adm']['error'];
    }
}
?>
