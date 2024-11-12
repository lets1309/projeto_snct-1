<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está autenticado
if (!isset($_SESSION['nome_adm'])) {
    header("Location: ../adm/index.php"); 
    exit;
}

$nome_adm = $_SESSION['nome_adm'];
?>