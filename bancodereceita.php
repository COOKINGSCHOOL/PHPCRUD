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
                <th>Imagem da Receita</th>
                <th>...</th>
                
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
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['imagem']) . "' alt='Imagem Receita' style='max-width: 100px; max-height: 100px;'></td>";
                echo "<td>
                    <a class='btn btn-primary' href='edit.php'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
  <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
</svg>
                </td>";


                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>