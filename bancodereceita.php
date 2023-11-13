<?php
include_once('config2.php'); // Substitua pelo caminho correto do seu arquivo de configuração

// Faça a consulta SQL
$sql = "SELECT * FROM receitas";
$result = $conexaoreceita->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Dados</title>
</head>
<body>
    <h1>RECEITAS DOS ALUNOS</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nome da Receita</th>
                <th>Ingredientes</th>
                <th>Modo de Preparo</th>
                <!-- Adicione mais colunas conforme necessário -->
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['ingredientes'] . "</td>";
                echo "<td>". $row['mdpreparo'] . "</td>";
                // Adicione mais colunas conforme necessário
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
