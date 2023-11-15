<?php
include_once('config2.php');

session_start();

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Obtém o user_id da sessão
    $user_id_session = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    // Modifica a consulta SQL para incluir a condição user_id
    $sqlDelete = "DELETE FROM receita WHERE id=$id AND user_id=$user_id_session";
    $result = $conexaoreceita->query($sqlDelete);

    if (!$result) {
        echo "Erro ao deletar a receita.";
    }

    header('Location: bancodereceita.php');
    exit(); // Certifique-se de encerrar o script após o redirecionamento
} else {
    header('Location: bancodereceita.php');
    exit(); // Certifique-se de encerrar o script após o redirecionamento
}
?>