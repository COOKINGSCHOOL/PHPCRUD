<?php
include_once('config2.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $ingredientes = $_POST['ingredientes'];
    $mdpreparo = $_POST['mdpreparo'];

    // Verifique se um novo arquivo de imagem foi enviado
    if (!empty($_FILES['imagem']['tmp_name']) && file_exists($_FILES['imagem']['tmp_name'])) {
        $imagem_tmp = $_FILES['imagem']['tmp_name'];
        $imagem_binario = file_get_contents($imagem_tmp);
        $imagem_binario_sql = mysqli_real_escape_string($conexaoreceita, $imagem_binario);
        $sqlUpdate = "UPDATE receita SET nome='$nome', categoria='$categoria', ingredientes='$ingredientes', mdpreparo='$mdpreparo', imagem='$imagem_binario_sql' WHERE id='$id'";
    } else {
        // Deixe o campo de imagem vazio
        $sqlUpdate = "UPDATE receita SET nome='$nome', categoria='$categoria', ingredientes='$ingredientes', mdpreparo='$mdpreparo', imagem=NULL WHERE id='$id'";
    }

    $result = $conexaoreceita->query($sqlUpdate);

    header('Location: bancodereceita.php');
}
?>