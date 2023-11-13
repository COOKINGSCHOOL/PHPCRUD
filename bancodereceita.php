<?php
include_once('config2.php');
$sql = "SELECT * FROM receitas";
$result = $conexaoreceita->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas dos Alunos</title>

    <style>
        h1 {
            
            text-align: center;
            color: white;
            border-radius: 10px;
            padding: 10px;
            margin-top: 20px;
            margin-left: 425px;
            text-decoration: none;
            background-color: black;
            display: inline-block;

           
        }

        a {
            
            color: white;
            background-color: black;
            border-radius: 10px;
            padding: 10px;
            display: inline-block;
           
        }


        body {
            background-color: dodgerblue;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(images/3d-rendem-de-uma-mesa-de-madeira-com-uma-cozinha-no-fundo.jpg);
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 20px;

        }

        table {
            margin-top: 20px;
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            color: #333;
            /* Cor do texto nas células da tabela */
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            /* Cor da borda das células da tabela */
        }

        th,
        td {

            padding: 12px;
            text-align: left;
        }

        th {
            background-color: dodgerblue;
            color: black;
            text-align: center;
        }

        
    </style>
</head>

<body>
    <a href="formulariodereceita.php">Voltar</a>
    <h1>Receitas dos Alunos</h1>

    <table>
        <thead>
            <tr>
                <th>Nome da Receita</th>
                <th>Categoria</th>
                <th>Ingredientes</th>
                <th>Modo de Preparo</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>". $row["categoria"] . "</td>";
                echo "<td>" . $row['ingredientes'] . "</td>";
                echo "<td>" . $row['mdpreparo'] . "</td>";
                echo "<td></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>